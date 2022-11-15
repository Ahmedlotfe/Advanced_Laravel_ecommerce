<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function checkout()
    {
        $cart_items = CartItem::where('user_id', Auth::user()->id)->where('is_active', true)->get();
        $total = 0;
        foreach ($cart_items as $cart_item) {
            $total += ($cart_item->product->price * $cart_item->quantity);
        }
        $tax = (2 * $total) / 100;
        $grand_total = $total + $tax;
        return view('store.checkout', [
            "categories" => Category::all(),
            "cart_items" => $cart_items,
            "total" => $total,
            "tax" => $tax,
            "grand_total" => $grand_total
        ]);
    }
}
