<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tags;

use App\Http\Requests;

class NewsController extends Controller
{
    public function getNews($slug){
        $news = News::where('slug',"=",$slug)->firstOrFail();
        $news->increment('views');
        return view('news.show')->with('data', $news);
    }

    public function getNewsByTagID($id){
        $tag    = Tags::findOrFail($id);
        $news   = $tag->news()->paginate(config('site.news_per_page'));
        return view('news.list')->with(compact('news', 'tag'));
    }
}
