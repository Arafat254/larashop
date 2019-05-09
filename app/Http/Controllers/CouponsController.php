<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;


class CouponsController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::where('code',$request->coupon_code)->first();

        if (!$coupon) {
            return back()->with('flash_contact','Invaild coupon code.Please try again');
        }


        session()->put('coupon',[
            'name' => $coupon->code,
            'discount' => $coupon->discount(Cart::subtotal()),
        ]);


        return back()->with('flash_contact','coupon applyed');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');

         return back()->with('flash_contact','coupon delete');
    }
}
