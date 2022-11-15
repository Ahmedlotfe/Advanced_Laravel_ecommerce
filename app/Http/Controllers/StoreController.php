<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class StoreController extends Controller
{
    public function welcome()
    {
        return view('store.welcome', [
            "products" => Product::filter(request(['category', 'search']))->where("is_available", true)->get(),
            "categories" => Category::all()
        ]);
    }

    public function store()
    {
        return view('store.store', [
            "products" => Product::filter(request(['category', 'search']))->where("is_available", true)->get(),
            "categories" => Category::all()
        ]);
    }

    public function cart()
    {
        return view('store.cart', [
            "categories" => Category::all()
        ]);
    }
}
