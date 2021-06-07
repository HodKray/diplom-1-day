<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\AbstractList;

class PageController extends Controller
{
    public function showMain()
    {
        $new_products = Product::latest()->take(4)->get();
        return view('pages.main', [
            'new_products' => $new_products,
        ]);
    }
    public function showProfile(){

        $orders = Order::whereUserId(Auth::user()->id)->orderByDesc('user_id')->paginate(4);

        return view('profile',[
        'orders'=> $orders,


        ]);
    }
    public function showAbout(){
        return view('pages.about');
    }
    public function showAdmin(){
        return view('admin.admin');
    }
}
