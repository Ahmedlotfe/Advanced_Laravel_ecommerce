<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class StoreController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            "products" => Product::where('is_available', true)->get(),
            "categories" => Category::all()
        ]);
    }

    public function store()
    {
        return view('store', [
            "products" => Product::where('is_available', true)->get(),
            "categories" => Category::all()
        ]);
    }
}
