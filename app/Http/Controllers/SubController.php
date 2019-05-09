<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sub;

class SubController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $sub = new Sub();
        $sub->email = $request->email;
        $sub->save();

        return back();
    }
}
