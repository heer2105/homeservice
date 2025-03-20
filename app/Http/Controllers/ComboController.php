<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use Illuminate\Http\Request;

class ComboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $data= combo::paginate(4);
        return view('combo.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = Combo::get();
        return view('combo.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate(
        [
            "title" => "required",
            "desc" => "required",
            "price" => "required",
            "discount" => "required",
            "duration" => "required",
            "rating" => "required"

        ]
    );

    // Image upload
    $imageName = "combo_" . time() . "." . $request->pic1->extension();
    $request->pic1->move(public_path('img'), $imageName);
    $imgPath = "/img/" . $imageName;

    // Insert code
    $table = new Combo();
    $table->title = $request->title;
    $table->desc = $request->desc;
    $table->price = $request->price;
    $table->discount = $request->discount;
    $table->duration = $request->duration;
    $table->rating = $request->rating;

    $table->pic1 = $imageName;
    $table->save();

    return redirect("combo")->withSuccess("Inserted successfully!!!");
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function show(Combo $combo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function edit(Combo $combo)
    {
        //
        return view('combo.edit',compact('combo'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Combo $combo)
    {
        //
        $request->validate(
            [
                "title"=>"required ",
                "desc" => "required",
                "price" => "required",
                "discount" => "required",
                "duration" => "required",
                "rating" => "required"

            ]
            );
            $table=Combo::find($combo->_id);
            if(isset($request->pic1)){
                //image upload
            $imageName="combo_".time().".".$request->pic1->extension();

            $request->pic1->move(public_path('img'),$imageName);
            $imgPath="/img/".$imageName;
            $table->pic1=$imageName;

            }
            
            //insert code
            $table->title=$request->title;
            $table->desc = $request->desc;
            $table->price = $request->price;
            $table->discount = $request->discount;
            $table->duration = $request->duration;
            $table->rating = $request->rating;

            $table->save();
            return redirect("combo")->withSuccess("Updated successfully!!!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Combo  $combo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Combo $combo)
    {
        //
        $combo->delete();
        return redirect('combo')->withSuccess("delete successfully!!!");
    }
}
