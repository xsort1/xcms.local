<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Content;

class ContentController extends Controller
{
    public function getBySlug($slug){
        $content = Content::where('slug', $slug)->first();
        if (!is_null($content)) {
            return view('content')->with($content);
        }else{
            abort(404);
        }
    }
}

//тест от Quick