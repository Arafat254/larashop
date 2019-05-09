<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use Auth;
use App\Product;
use App\Subcategory;
use App\Category;


class ProductController extends Controller
{
    public function store(Request $request)
    {

        
        
    	 $dublicates = Cart::search(function ($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;
        });

        if ($dublicates->isNotEmpty()) {
            return back()->with('success_message',' Item Is Already your Cart');
        }

        Cart::add($request->id, $request->name, $request->quantity, $request->price)->associate('App\Product');

         return back();
    }



     public function index()
    {
    	Cart::destroy();
        return back();
    }




    public function cart()
    {
        $products = Product::inRandomOrder()->get();
        return view('cart',compact('products'));
    }




    public function update()
    {
        $tax = config('cart.tax') / 100;
        $discount = session()->get('coupon')['discount'] ?? 0;

        $newSubtotal = (Cart::subtotal() - $discount);


        $newTotal = $newSubtotal * (1 + $tax);


        return view('checkout')->with([
            'discount' => $discount,
            'newSubtotal' => $newSubtotal,
            'newTotal' => $newTotal,
        ]);
    }



    public function order(Request $request)
    {

        if (Cart::count() > 0) {

            $order = new Order();
            $order->user_id = Auth::User()->id;
            $order->first_name = $request->first_name;
            $order->last_name = $request->last_name;
            $order->email = $request->email;
            $order->phone = $request->phone;
            $order->address = $request->address;
            $order->country = $request->country;
            $order->postal_code = $request->postal_code;
            $order->city = $request->city;
            $order->approved = 0;
            $order->bikash = $request->bikash;
            $order->save();


            foreach (Cart::content() as $item) {
                $order->products()->attach($item->model->id);
            }

            Cart::destroy();

            return back(); 
        }else{
            return back();
        }
    }


    public function show($slug)
    {
        $product = Product::where('slug',$slug)->first();

        return view('single-product',compact('product'));
    }

    public function category_show($slug)
    {
        $subcategories = Subcategory::where('slug',$slug)->first()->products;


        $products = Product::inRandomOrder()->get();
        $categories = Category::all();
        $subcategory  = Subcategory::all();
        return view('subcategories',compact('subcategories','products','categories','subcategory'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'LIKE', "%$query%")->get();

         $categories = Category::all();
        $subcategory  = Subcategory::all();
        return view('search',compact('products','categories','subcategory'));
    }
}
