<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=coupon::latest()->paginate(4);
        return view('coupon.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('coupon.create');

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
                "c_code"=>"required | unique:coupon",
                "c_desc"=>"required | unique:coupon",
                "c_title"=>"required | unique:coupon",
                "c_dis"=>"required | unique:coupon",
                "c_maxamt"=>"required | unique:coupon",
                "cat_pic"=>"required",
                "status"=>"required"

            ]
            );
            //image upload
            $imageName="coupon".time().".".$request->cat_pic->extension();

            $request->cat_pic->move(public_path('img'),$imageName);
            $imgPath="/img/".$imageName;

            //insert code
            $table=new Coupon();
            $table->c_code=$request->c_code;
            $table->c_desc=$request->c_desc;
            $table->c_title=$request->c_title;
            $table->c_dis=$request->c_dis;
            $table->c_maxamt=$request->c_maxamt;
            $table->cat_pic=$imageName;
            $table->status= (bool) $request->status;
            $table->save();
            return redirect("coupon")->withSuccess("Inserted successfully!!!");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
        return view('coupon.show',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
        return view('coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
        $request->validate(
            [
                "c_code"=>"required ",
                "c_desc"=>"required ",
                "c_title"=>"required",
                "c_dis"=>"required ",
                "c_maxamt"=>"required",
                "status"=>"required"
            ]
            );
            $table=Coupon::find($coupon->_id);
            if(isset($request->cat_pic)){
                //image upload
            $imageName="coupon".time().".".$request->cat_pic->extension();

            $request->cat_pic->move(public_path('img'),$imageName);
            $imgPath="/img/".$imageName;
            $table->cat_pic=$imageName;

            }
            
            //insert code
            $table->c_code=$request->c_code;
            $table->c_desc=$request->c_desc;
            $table->c_title=$request->c_title;
            $table->c_dis=$request->c_dis;
            $table->c_maxamt=$request->c_maxamt;
            $table->status= (bool) $request->status;
            $table->save();
            return redirect("coupon")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        return redirect('coupon')->withSuccess("delete successfully!!!");
    }
}
