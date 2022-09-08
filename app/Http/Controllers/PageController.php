<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        $url = route('articles.index');
        return view('about', compact('url'));
    }
}
