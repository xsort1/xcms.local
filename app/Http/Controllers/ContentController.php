<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Content;

class ContentController extends Controller
{
    public function get($slug){
        if ($content = Content::where('slug',$slug)->first()){
            return view('content')->with($content);
        }else{
            abort(404);
        }
    }
}
