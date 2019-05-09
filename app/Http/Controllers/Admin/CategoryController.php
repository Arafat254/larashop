<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','DESC')->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.category.create');
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


 
        $files = Input::file('image');
        $slug = str_slug($request->name);
        foreach ($files as $file) {
             if (isset($file)) {
                $curentdate = Carbon::now()->toDateString();
                $imagename = $slug . '-' . $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $image = \Image::make($file);
                if (!file_exists('category')) {
                    mkdir('category', '0777', true);
                }
                $path = public_path() . '/category/';
                $image->resize(881,245);
                $image->save($path . $imagename);
                
                
                } else {
                    $imagename = "default.png";
                }
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->image = $imagename;
        $category->save();
        Toastr::success('Category Successfully created','Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
      
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        $file = Input::file('image');
        $slug = str_slug($request->name);

        if (isset($file)) {
            $curentdate = Carbon::now()->toDateString();
            $imagename = $slug . '-' . $curentdate . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $image = \Image::make(\Input::file('image'));
            if (!file_exists('category')) {
                mkdir('category', '0777', true);
            }
             if (file_exists('category/'.$category->image)) {
                unlink('category/'.$category->image);
            }
            $path = public_path() . '/category/';
            $image->resize(881,245);
            $image->save($path . $imagename);
            if (!file_exists('category/grid')) {
                mkdir('category/grid', '0777', true);
            }
            if (file_exists('category/grid/'.$category->image)) {
                unlink('category/grid/'.$category->image);
            }
            $path = public_path() . '/category/grid/';
            $image->resize(372,193);
            $image->save($path . $imagename);
            
            } else {
                $imagename = $category->image;
            }


        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->image = $imagename;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
