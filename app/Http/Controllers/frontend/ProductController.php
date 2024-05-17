<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ProductController
{
    public function index()
    {
        return view('frontend.product');
    }
    public function detail($slug)
    {
        echo $slug;
        return view('frontend.product_detail');
    }
}
