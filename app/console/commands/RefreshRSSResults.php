<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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
            'q' => 'gua pawon -filetype:pdf -pdf',
            'key' => $apiKey,
            'cx' => $cseId,
            'dateRestrict' => 'y1',
            'exactTerms' => 'pawon',
            'num' => 9,
            // opstional
            // 'lr' => 'lang_id',
            // 'siteSearch' => 'kompas.com',
            // 'sort' => 'date'
        ]);

        $data = $response->json();
        if (isset($data['items'])) {
            foreach ($data['items'] as $item) {
                if (str_ends_with($item['link'], '.pdf')) {
                    continue;
                }
                $image = $item['pagemap']['cse_image'][0]['src'] ?? null;
                $snippet = $item['snippet'];
                preg_match('/[A-Za-z]{3} \d{1,2}, \d{4}/', $snippet, $matches);

                // Kalau ketemu tanggalnya
                if (!empty($matches)) {
                    $dateString = $matches[0]; // Contoh: "Jun 15, 2024"

                    // Ubah ke format Carbon
                    $carbonDate = \Carbon\Carbon::parse($dateString);

                    // Format ke Indonesia
                    $formattedDate = $carbonDate->locale('id')->isoFormat('D MMMM YYYY'); // Contoh: "15 Juni 2024"
                } else {
                    $formattedDate = null;
                }

                $articles[] = [
                    'title' => $item['pagemap']['metatags'][0]['og:title'] ?? $item['pagemap']['metatags'][0]['title'],
                    'link' => $item['link'],
                    'snippet' => trim(preg_replace('/\b[A-Za-z]{3} \d{1,2}, \d{4}\b\s*\.{3}\s*/', '', $item['snippet'])),
                    'image' => $image,
                    'date' => $formattedDate,
                ];
            }
        }

        Cache::put('cse_data', compact('articles'), now()->addDays(7));
    }
}