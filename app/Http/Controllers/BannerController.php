<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $banner=Banner::latest()->paginate(4);
        return view('banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "b_name"=>"required | unique:banner",
            "b_pic"=>"required"
        ]);

        //cat_123.jpg image upload code
        $imgName="b_".time().".".$request->b_pic->extension();
        $request->b_pic->move(public_path('img'),$imgName);
        $imgPath=$imgName;

        $table=new Banner();
        $table->b_name=$request->b_name;
        $table->b_pic=$imgName;
        $table->status=true;
        $table->save();

        return redirect('banner')->withSuccess("Inserted successfully!!!");;
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
        return view('banner.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
        $table=Banner::find($banner->_id);
       

        if(isset($request->b_pic)){
            $imgName="b_".time().".".$request->b_pic->extension();
            $request->b_pic->move(public_path('img'),$imgName);

            $imgPath=$imgName;   
            $table->b_pic=$imgName;
        }

        $table->status=true;


        $table->save();
        return redirect('banner')->withSuccess("Update Successfully....");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        return redirect('banner')->withSuccess('Deleted Successfully...');
    }
}