<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RSSController extends Controller
{
    public function index()
    {
        $apiKey = config('services.google.api_key');
        $cseId = config('services.google.cse_id');

        $response = Http::withHeaders([
            'Accept-Encoding' => 'gzip',
            'User-Agent' => 'My Laravel App (gzip)',
        ])->get('https://www.googleapis.com/customsearch/v1', [
            'q' => 'gua pawon',
            'key' => $apiKey,
            'cx' => $cseId,
            // 'dateRestrict' => 'y1',
            'exactTerms' => 'gua pawon',
            // 'lr' => 'lang_id',
            // 'num' => 10,
            // Optional filter by site:
            // 'siteSearch' => 'kompas.com',
            // Optional sort:
            'sort' => 'date'
        ]);

        $data = $response->json();
        if (isset($data['items'])) {
            foreach ($data['items'] as $item) {
                $image = $item['pagemap']['cse_image'][0]['src'] ?? null;

                $articles[] = [
                    'title' => $item['title'],
                    'link' => $item['link'],
                    'snippet' => $item['snippet'],
                    'image' => $image,
                ];
            }
        }

        return view('rss.rss-gua-pawon', compact('articles'));
    }
}
