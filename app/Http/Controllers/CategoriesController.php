<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{

    public function getCategoriesList()
    {
		return view('products.categories');
    }
}
