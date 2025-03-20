<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\person;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Bool_;

class ApiController extends Controller
{
    //
    public function register(Request $request)
    {
        if(!isset($request->username) &&
        !isset($request->password) &&
        !isset($request->email) &&
        !isset($request->mobileno))
        {
            return[
                "status"=>false,
                "message"=>"Not Sufficient Parameter",
                "person"=>null
            ];
        }
        else
        {
            // $request->validate([
            //     "username"=>"required",
            //     "mobileno"=>"required | numeric | digits:10",
            //     "email"=>"required | email",
            //     "password"=>"required | min:6 | max:10" 
            // ]);
            $table=new person();
            $table->username=$request->username;
            $table->password=$request->password;
            $table->email=$request->email;
            $table->mobileno=$request->mobileno;
            $table->status=true;
            $table->save();
 
            return [
                "status"=>true,
                "message"=>"Registered Successfully!!",
                "person"=>$table
            ];

        }
    }

    public function login_user(Request $request) {
        if(isset($request->username) && isset($request->password)) {
            $table = person::where('username',$request->username)
            ->where('password',$request->password)->first();
            
            if($table!=null) {
                return [
                    'status' => true,
                    'messege' => 'Login Successfully',
                    'person' => $table
                ];
            } else {
                return [
                    'status' => false,
                    'messege' => 'Invalid Username or Password',
                    'person' => null
                ];
            }
        } else {
            return [
                'status' => false,
                'messege' => 'Insuficient Perameter',
                'person' => null
            ];
        }
    }

    public function getData() {
        $banner_data = Banner::where('status',true)->get();
        $coupon_data = Coupon::where('status',true)->get();
        $category_data = Category::get();
        $service_data = Service::get();

        return [
            'status' => true,
            'message' => "Data Get Success",
            'banner' => $banner_data,
            'coupon' => $coupon_data,
            'category' => $category_data,
            'service' => $service_data
        ];

    }

    public function confirmBooking(Request $request)  {
        $uid=$request->uid;
        $time = Carbon::now()->format('H:i');
        $date = Carbon::now()->format('d/m/Y'); 

         $data=Booking::where('uid',$uid)
        ->where('status',0)->get();
        foreach($data as $item){
            $item->status=1;
            $item->address=$request->address;
            $item->c_code=$request->c_code;
            $item->c_o=$request->c_o;
            $item->time=$time;
            $item->date=$date;
            $item->c_discount=$request->c_discount;
            $item->save();
        } 
        $data=Booking::where('uid',$uid)
        ->where('status',0)->get(); 
        return [
            "status"=>true,
            "message"=>" Booking successfull",
            "order"=>$data
        ];
    }
    public function getProductByCat(Request $request) {
        if(isset($request->service_id)) {
            $table = Service::where('service_id',$request->service_id)->get();

            if(isset($table)) {
                return [
                    'status' => true,
                    'message' => 'Data Found',
                    'service' => $table
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'No Data Found',
                    'service' => null
                ];
            }
        } else {
            return [
                'status' => false,
                'message' => 'Inssuficient Parameters!!',
                'service' => null
            ];
        }
    }

    public function addbooking(Request $request){
        $uid=$request->uid;
        $pid=$request->pid;
        $data=Booking::where('uid',$uid)
        ->where('pid',$pid)
        ->where('status',0)->first();
        if($data==null){
            $table=new Booking();
            $table->uid=$request->uid;
            $table->pid=$request->pid;

            $product=Service::find($request->pid);

            $table->pname=$product->sname;
            $table->pic1=$product->pic1;
            $table->amount=(int)$product->price;
            $table->tot_amount=(int)$product->price;

            $table->c_discount=(int)$request->c_discount;
            $table->time=$request->time;
            $table->date=$request->date;
            $table->status=0;
            $table->c_o=$request->c_o;
            $table->c_code=$request->c_code;
            $table->address=$request->address;
            $table->save();
           
           
            
        }
        $booking=Booking::where("uid",$request->uid)
        ->where("status",0)->get();
        return [
            "status"=>true,
            "message"=>"Booking done",
            "booking"=>$booking
        ];

        
    }

    public function getbooking(Request $request)  {
        $data=Booking::where('uid',$request->uid)
        ->where("status",(int)$request->status)->get();

        return [
                "status"=>true,
                "message"=>"Booking get",
                "booking"=>$data
            ];
    }
    public function removeBooking(Request $request)  {
        $uid=$request->uid;
        Booking::find($request->id)->delete();

         $data=Booking::where('uid',$uid)
        ->where('status',0)->get();
        return [
            "status"=>true,
            "message"=>"remove from cart",
            "booking"=>$data
        ];
    }

    public function getCouponFromCode(Request $request) {
        if(isset($request->code)) {
            $table = coupon::where('c_code',$request->code)->first(); 

            if(isset($table)) {
                return [
                    'status' => true,
                    'message' => 'Coupon Applyed',
                    'coupon' => $table
                ];
            } else {
                return [
                    'status' => false,
                    'message' => 'Invalid Coupon Code',
                    'coupon_data' => null
                ];
            }
        } else {
            return [
                'status' => false,
                'message' => 'Insufficient parameters',
                'coupon_data' => null
            ];
        }
    }

    public function clearCart(Request $request) {
        Booking::where('uid',$request->uid)
            ->where('status',0)
            ->delete();
            $data=Booking::where('uid',$request->uid)
            ->where('status',0)->get();
            return [
                "status"=>true,
                "message"=>"remove from cart",
                "booking"=>$data
            ];
    }
    public function getBookinghistory(Request $request) {

        $data=Booking::where('uid',$request->uid)
        ->where('status','>=',1)->get();
        return [
            "status"=>true,
            "message"=>"getting cart",
            "order"=>$data
        ];
    }
}