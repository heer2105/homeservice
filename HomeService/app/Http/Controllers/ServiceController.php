<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use SebastianBergmann\Timer\Duration;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=Service::paginate(4);
        //print_r($data);
        return view('service.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::get();
        return view('service.create',compact('data'));

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
                "sname"=>"required",
                "pic1"=>"required",
               
                "video"=>"required",
                "duration"=>"required",
                "rating"=>"required",
                "desc"=>"required",
                "price"=>"required | min:1 | numeric",
                "discount"=>"required |numeric",
                // "popular"=>"required |boolean"

            ]
            );
            $table=new Service();

            //image upload1
            $imageName1="service1".time().".".$request->pic1->extension();

            $request->pic1->move(public_path('img'),$imageName1);
            $imgPath1="/img/".$imageName1;

            //image upload2
            if(isset($request->pic2)){

            $imageName2="service2".time().".".$request->pic2->extension();

            $request->pic2->move(public_path('img'),$imageName2);
            $imgPath2="/img/".$imageName2; 
            $table->pic2=$imageName2;

            }

            //image upload3
            if(isset($request->pic3)){

            $imageName3="service3".time().".".$request->pic3->extension();

            $request->pic3->move(public_path('img'),$imageName3);
            $imgPath3="/img/".$imageName3;
            $table->pic3=$imageName3;
            }


            $videoName = "video_".time().".". $request->video->extension();

            // Move the video to the 'public/videos' directory
            $request->video->move(public_path('img'), $videoName);

            // Store the video path for database insertion or other use
            $videoPath= "/img/".$videoName;

            //insert code
            $table->sname=$request->sname;
            $table->pic1=$imageName1;
           
            $table->video=$videoName;
            $table->duration=$request->duration;
            $table->rating=$request->rating;
            $table->desc=$request->desc;
            $table->desc2=$request->desc2;

            $table->price=$request->price;
            $table->discount=$request->discount;
            $table->service_id = $request->service_id;
            if(strcmp($request->popular,"on")==0){
            $table->popular = true; 
                
            }else{
                $table->popular = false; 

            }

           


            $table->save();
            return redirect("service")->withSuccess("Inserted successfully!!!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
        $data = Category::get();

        return view('service.edit',compact('service','data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
        // $request->validate(
        //     [
        //         "sname"=>"required ",
        //         "duration"=>"required",
        //         "rating"=>"required",
        //         "desc"=>"required ",
        //         "price"=>"required",
        //         "discount"=>"required"
        //     ]
        //     );
            $table=Service::find($service->_id);
            if(isset($request->pic1)){
                //image upload
            $imageName1="service_".time().".".$request->pic1->extension();

            $request->pic1->move(public_path('img'),$imageName1);
            $imgPath1="/img/".$imageName1;
            $table->pic1=$imageName1;

            }

            $table=Service::find($service->_id);
            if(isset($request->pic2)){
                //image upload
            $imageName2="service_".time().".".$request->pic2->extension();

            $request->pic2->move(public_path('img'),$imageName2);
            $imgPath2="/img/".$imageName2;
            $table->pic2=$imageName2;

            }

            $table=Service::find($service->_id);
            if(isset($request->pic3)){
                //image upload
            $imageName3="service_".time().".".$request->pic3->extension();

            $request->pic3->move(public_path('img'),$imageName3);
            $imgPath3="/img/".$imageName3;
            $table->pic3=$imageName3;
            }

            $table=Service::find($service->_id);
            if(isset($request->video)){
                $videoName="service_".time().".".$request->video->extention();
                $request->video->move(public_path('img'),$videoName);
                $videoPath="/img/".$videoName;
                $table->video=$videoName;
            }
            
            //insert code
            $table->sname=$request->sname;
            $table->duration=$request->duration;
            $table->rating=$request->rating;
            $table->desc=$request->desc;
            $table->desc2=$request->desc2;

            $table->price=$request->price;
            $table->discount=$request->discount;
            $table->service_id = $request->service_id;

            if(strcmp($request->popular,"on")==0){
                $table->popular = true; 
                    
                }else{
                    $table->popular = false; 
    
                }

            $table->save();
            return redirect("service")->withSuccess("Updated successfully!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        return redirect('service')->withSuccess("delete successfully!!!");
    }
}
