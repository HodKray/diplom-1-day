<?php

namespace App\Http\Controllers;

use App\Models\Product;

class PageController extends Controller
{
    public function showMain()
    {
        $new_products = Product::latest()->take(4)->get();
        return view('pages.main', [
            'new_products' => $new_products,
        ]);
    }
}
