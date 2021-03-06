<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Categories;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $news  = News::orderBy('created_at', 'desc')->paginate(5);
//         return view('news.list')->with('news', $news);
			$categories = Categories::with('children')->get();
			return view('index')->with('data', $categories);
    }
}
