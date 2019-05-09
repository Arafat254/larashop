<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
    	  $dublicates = Cart::instance('wishlist')->search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if ($dublicates->isNotEmpty()) {
           return back();
        }

    	 Cart::instance('wishlist')->add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

            return back();
    }

    public function index()
    {
    	return view('wishlist');
    }

    public function destroy()
    {
    	Cart::instance('wishlist')->destroy();
    	return back();
    }

    public function wishlist_to_cart($id)
    {

    	
    	 $item = Cart::instance('wishlist')->get($id);

        Cart::instance('wishlist')->remove($id);

        $dublicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id){
             return $rowId === $id;
        });

        if ($dublicates->isNotEmpty()) {
            return back();
        }


        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('App\Product');

        return redirect()->route('cart.index');
    }

    public function compare_store(Request $request)
    {
    	  $dublicates = Cart::instance('compare')->search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if ($dublicates->isNotEmpty()) {
           return back();
        }

    	 Cart::instance('compare')->add($request->id, $request->name, 1, $request->price)
            ->associate('App\Product');

            return back();
    }
}
