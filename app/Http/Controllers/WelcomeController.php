<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Subcategory;

class WelcomeController extends Controller
{
    public function index()
    {
    	$products = Product::latest()->get();
    	$categories = Category::inRandomOrder()->take(8)->get();
    	$subcategories = Subcategory::latest()->get();
    	$productsellers = Product::take(6)->get();
    	$productsrandom = Product::inRandomOrder()->get();
    	return view('welcome',compact('products','categories','subcategories','productsellers','productsrandom'));
    }
}
