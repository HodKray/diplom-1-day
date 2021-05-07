<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function showProduct(Product $product)
    {
        return view('pages.product', [
            'product' => $product,
        ]);
    }

    public function showCategory(Category $category)
    {
        $products = Product::where('category_id', $category->id);
        return view('pages.category', [
            'category' => $category,
            'products' => $products->paginate(4),
        ]);
    }
}
