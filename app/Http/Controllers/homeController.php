<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('home');
    }
//    public function index(){
//     $apiKey = config('services.google.api_key');
//         $cseId = config('services.google.cse_id');

//         $response = Http::withHeaders([
//             'Accept-Encoding' => 'gzip',
//             'User-Agent' => 'My Laravel App (gzip)',
//         ])->get('https://www.googleapis.com/customsearch/v1', [
//             'q' => 'gua pawon',
//             'key' => $apiKey,
//             'cx' => $cseId,
//             'dateRestrict' => 'y1',
//             'exactTerms' => 'pawon',
//             'num' => 9,
//             // 'lr' => 'lang_id',
//             // 'siteSearch' => 'kompas.com',
//             // 'sort' => 'date'
//         ]);

//         $data = $response->json();
//         if (isset($data['items'])) {
//             foreach ($data['items'] as $item) {
//                 $image = $item['pagemap']['cse_image'][0]['src'] ?? null;
//                 $snippet = $item['snippet'];
//                 preg_match('/[A-Za-z]{3} \d{1,2}, \d{4}/', $snippet, $matches);

//                 // Kalau ketemu tanggalnya
//                 if (!empty($matches)) {
//                     $dateString = $matches[0]; // Contoh: "Jun 15, 2024"

//                     // Ubah ke format Carbon
//                     $carbonDate = \Carbon\Carbon::parse($dateString);

//                     // Format ke Indonesia
//                     $formattedDate = $carbonDate->locale('id')->isoFormat('D MMMM YYYY'); // Contoh: "15 Juni 2024"
//                 } else {
//                     $formattedDate = null;
//                 }
//                 // $dateRaw = $item['pagemap']['metatags'][0]['publishdate']
//                 //     ?? $item['pagemap']['metatags'][0]['dtk:publishdate']
//                 //     ?? null;
//                 // $dateRaw = $item['pagemap']['metatags'][0]['publishdate']
//                 //     ?? ($item['pagemap']['metatags'][0]['dtk:publishdate'] ?? null);
//                 // $dateRaw = $item['pagemap']['metatags'][0]['dtk:publishdate'];
//                 // $createDate = $dateRaw ? (new DateTime($dateRaw))->format('Y-m-d') : null;


//                 $articles[] = [
//                     // 'title' => $item['title'],
//                     'title' => $item['pagemap']['metatags'][0]['og:title'],
//                     'link' => $item['link'],
//                     'snippet' => $item['pagemap']['metatags'][0]['og:description'],
//                     'image' => $image,
//                     'date' => $formattedDate,
//                 ];
//             }
//         }

//         return view('home', compact('articles'));
//     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
