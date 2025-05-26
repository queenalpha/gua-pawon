<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class RefreshRSSResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:refresh-r-s-s-results';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $apiKey = config('services.google.api_key');
        $cseId = config('services.google.cse_id');

        $response = Http::withHeaders([
            'Accept-Encoding' => 'gzip',
            'User-Agent' => 'My Laravel App (gzip)',
        ])->get('https://www.googleapis.com/customsearch/v1', [
            'q' => 'gua pawon -filetype:pdf -pdf -site:instagram.com',
            'key' => $apiKey,
            'cx' => $cseId,
            'dateRestrict' => 'y1',
            'exactTerms' => 'gua pawon',
            'num' => 9,
        ]);

        $data = $response->json();
        $articles = [];

        if (isset($data['items']) && is_array($data['items'])) {
            foreach ($data['items'] as $item) {
                if (str_ends_with($item['link'], '.pdf')) {
                    continue;
                }

                $image = data_get($item, 'pagemap.cse_image.0.src');
                $snippet = $item['snippet'] ?? '';

                // Cari tanggal di snippet
                preg_match('/[A-Za-z]{3} \d{1,2}, \d{4}/', $snippet, $matches);
                $formattedDate = null;

                if (!empty($matches)) {
                    try {
                        $carbonDate = \Carbon\Carbon::parse($matches[0]);
                        $formattedDate = $carbonDate->locale('id')->isoFormat('D MMMM YYYY');
                    } catch (\Exception $e) {
                        // log error atau biarkan kosong
                    }
                }

                // Ambil judul secara aman
                $meta = data_get($item, 'pagemap.metatags.0', []);
                $title = $meta['og:title'] ?? ($meta['title'] ?? '[Tanpa Judul]');

                $articles[] = [
                    'title' => $title,
                    'link' => $item['link'] ?? '#',
                    'snippet' => trim(preg_replace('/\b[A-Za-z]{3} \d{1,2}, \d{4}\b\s*\.{3}\s*/', '', $snippet)),
                    'image' => $image,
                    'date' => $formattedDate,
                ];
            }
        }

        Cache::put('cse_data', compact('articles'), now()->addDays(7));
        $this->info('CSE data refreshed and cached successfully.');
    }
}
