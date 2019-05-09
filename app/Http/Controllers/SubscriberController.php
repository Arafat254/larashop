<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
    	
    	$sunscribers = new Subscriber;
    	$Subscribers->email = $request->email;
    	$Subscribers->save();

    	return back();
    }
}
