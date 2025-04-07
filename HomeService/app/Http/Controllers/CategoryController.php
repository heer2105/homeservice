<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Category::paginate(4);
        // print_r($data);
        return view('category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                "cat_name"=>"required | unique:category",
                "cat_pic"=>"required"
            ]
            );
            //image upload
            $imageName="category_".time().".".$request->cat_pic->extension();

            $request->cat_pic->move(public_path('img'),$imageName);
            $imgPath="/img/".$imageName;

            //insert code
            $table=new Category();
            $table->cat_name=$request->cat_name;
            $table->cat_pic=$imageName;
            $table->save();
            return redirect("category")->withSuccess("Inserted successfully!!!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate(
            [
                "cat_name"=>"required ",
            ]
            );
            $table=Category::find($category->_id);
            if(isset($request->cat_pic)){
                //image upload
            $imageName="category_".time().".".$request->cat_pic->extension();

            $request->cat_pic->move(public_path('img'),$imageName);
            $imgPath="/img/".$imageName;
            $table->cat_pic=$imageName;

            }
            
            //insert code
            $table->cat_name=$request->cat_name;
            $table->save();
            return redirect("category")->withSuccess("Updated successfully!!!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('category')->withSuccess("delete successfully!!!");
    }
}
