<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Auth;
use Brian2694\Toastr\Facades\Toastr;
use App\Productimages;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.product.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);


        
        $file = Input::file('image');
        $slug = str_slug($request->name);
       
             if (isset($file)) {
                $curentdate = Carbon::now()->toDateString();
                $imagename = $slug . '-' . $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $image = \Image::make($file);
                if (!file_exists('product')) {
                    mkdir('product', '0777', true);
                }
                $path = public_path() . '/product/';
              
                $image->save($path . $imagename);
                
                
                } else {
                    $imagename = "default.png";
                }
        
 

        $product = new Product();
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->image = $imagename;
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->user_id = Auth::id();
        $product->quantity = $request->quantity;
        $product->subprice = $request->regular_price;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->information = $request->information;
        $product->save();

         if (count($request->photo) > 0) {
            foreach ($request->photo as $image) {
                $curentdate = Carbon::now()->toDateString();
                $imagenames = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                if (!file_exists('product/gallary')) {
                    mkdir('product/gallary', '0777', true);
                }
                $image->move('product/gallary', $imagenames);
                $product_image = new Productimages();
                $product_image->product_id = $product->id;
                $product_image->image = $imagenames;
                $product_image->save();
                 
            }
        }

        Toastr::success('Product Successfully created','Success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin.product.edit',compact('product','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
         $this->validate($request,[
            'name' => 'required'
        ]);

        
 
        

      
        $product->name = $request->name;
        $product->slug = str_slug($request->name);
        $product->image = 'hhhhh.jpg';
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->user_id = Auth::id();
        $product->quantity = $request->quantity;
        $product->subprice = $request->regular_price;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->information = $request->information;
        $product->save();
        Toastr::success('Product Successfully updated','Success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
