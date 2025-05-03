<?php

namespace App\Http\Controllers;

use App\Models\Research;
use Illuminate\Http\Request;

class journalController extends Controller
{
    public function index()
    {
        $journals = Research::all();
        return view('pages.journal', compact('journals'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $journals = Research::where('title', 'like', '%' . $query . '%')
                    ->orWhere('author', 'like', '%' . $query . '%')
                    ->get();

        return view('pages.journal', compact('journals', 'query'));
    }

}
