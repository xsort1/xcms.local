<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Products;

class CommonController extends Controller
{
    public function getSlug($slug)
    {
	    $product = Products::where('slug',$slug)->get();
		return view('products.product')->with('product', $product);
    }
}
