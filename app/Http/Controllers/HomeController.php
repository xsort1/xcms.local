<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('index')->with("news", $news);
    }

    public function getNews($slug){
        $news = News::where('slug', '=', $slug)->firstOrFail();
        return view('news.show')->with('news', $news);
    }
}
