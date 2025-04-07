<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Combo;
use App\Models\Coupon;
use App\Models\person;
use App\Models\Service;
use App\Models\Version;
use App\Models\WishList;

use Carbon\Carbon;
use Faker\Provider\ar_EG\Person as Ar_EGPerson;
use Faker\Provider\ar_JO\Person as Ar_JOPerson;
use Faker\Provider\ar_SA\Person as Ar_SAPerson;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Bool_;

class ApiController extends Controller
{
    //
    public function register(Request $request)
    {
        if (
            !isset($request->username) &&
            !isset($request->password) &&
            !isset($request->email) &&
            !isset($request->mobileno)
        ) {
            return [
                "status" => false,
                "message" => "Not Sufficient Parameter",
                "person" => null
            ];
        } else {
            // $request->validate([
            //     "username"=>"required",
            //     "mobileno"=>"required | numeric | digits:10",
            //     "email"=>"required | email",
            //     "password"=>"required | min:6 | max:10" 
            // ]);
            $table = new person();
            $table->username = $request->username;
            $table->password = $request->password;
            $table->email = $request->email;
            $table->mobileno = $request->mobileno;
            $table->status = true;
            $table->save();

            return [
                "status" => true,
                "message" => "Registered Successfully!!",
                "person" => $table
            ];
        }
    }

    public function login_user(Request $request)
    {
        if (isset($request->username) && isset($request->password)) {
            $table = person::where('username', $request->username)
                ->where('password', $request->password)->first();

            if ($table != null) {
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
    // public function loginorregister(Request $request)
    // {
    //     if (!isset($request->mobileno)) {
    //         return [
    //             "status" => false,
    //             "message" => "Mobile number is required",
    //             "person" => null
    //         ];
    //     }

    //     $user = Person::where('mobileno', $request->mobileno)->first();

    //     if ($user) {
    //         return [
    //             "status" => true,
    //             "message" => "Login successful",
    //             "person" => $user
    //         ];
    //     } else {
    //         $user = new Person();
    //         $user->mobileno = $request->mobileno;
    //         $user->username = $request->username ?? 'User' . rand(1000, 9999);
    //         $user->email = $request->email ?? null;
    //         $user->password = bcrypt($request->password ?? 'defaultpassword');
    //         $user->status = true;
    //         $user->save();

    //         return [
    //             "status" => true,
    //             "message" => "Account created successfully",
    //             "person" => $user
    //         ];
    //     }
    // }

    // public function wregister(Request $request)
    // {
    //     if (
    //         !isset($request->username) &&
    //         !isset($request->mobileno)
    //     ) {

    //         return
    //             [
    //                 "status" => false,
    //                 "message" => "Not Sufficient Parameter",
    //                 "worker" => null
    //             ];
    //     } else {

    //         $table = new Worker();
    //         $table->username = $request->username;
    //         $table->mobileno = $request->mobileno;
    //         $table->status = true;
    //         $table->save();

    //         return
    //             [
    //                 "status" => true,
    //                 "message" => "Created Successfully!!!",
    //                 "worker" => $table
    //             ];
    //     }
    // }
    

    public function getData(Request $request)
    {

        $service_data = Service::get();
        $combo_data = Combo::get();


        if ($request->uid != 0) {
            $uid = $request->uid;
            foreach ($service_data as $service) {
                $data = WishList::where('uid', $uid)->where('sid', $service->_id)->first();
                if ($data != null) {
                    $service->is_wish = true;
                }
            }
        } else {
            foreach ($service_data as $service) {
                $service->is_wish = false;
            }
        }
        $banner_data = Banner::where('status', true)->get();
        $coupon_data = Coupon::where('status', true)->get();
        $category_data = Category::get();

        return [
            'status' => true,
            'message' => "Data Get Success",
            'banner' => $banner_data,
            'coupon' => $coupon_data,
            'category' => $category_data,
            'service' => $service_data,
            "combo"=>$combo_data
        ];
    }

    public function confirmBooking(Request $request)
    {
        $uid = $request->uid;
        // $time = Carbon::now()->format('H:i');
        // $date = Carbon::now()->format('d/m/Y'); 

        $data = Booking::where('uid', $uid)
            ->where('status', 0)->get();
        foreach ($data as $item) {
            $item->status = 1;
            $item->address = $request->address;
            $item->c_code = $request->c_code;
            $item->c_o = $request->c_o;
            $item->time = $request->time;
            $item->date = $request->date;
            $item->c_discount = $request->c_discount;
            $item->save();
        }
        $data = Booking::where('uid', $uid)
            ->where('status', 0)->get();
        return [
            "status" => true,
            "message" => " Booking successfull",
            "order" => $data
        ];
    }
    public function getProductByCat(Request $request)
    {
        if (isset($request->service_id)) {
            $table = Service::where('service_id', $request->service_id)->get();

            if (isset($table)) {
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





    public function addbooking(Request $request)
    {
        $uid = $request->uid;
        $pid = $request->pid;
        $data = Booking::where('uid', $uid)
            ->where('pid', $pid)
            ->where('status', 0)->first();
        if ($data == null) {
            $table = new Booking();
            $table->uid = $request->uid;
            $table->pid = $request->pid;

            $product = Service::find($request->pid);
            if($product==null){
                $combo=Combo::find($request->pid);

                $table->pname = $combo->title;
                $table->pic1 = $combo->pic1;
                $table->amount = (int)$combo->price;
                $table->tot_amount = (int)$combo->price;

            }else{
                $table->pname = $product->sname;
                $table->pic1 = $product->pic1;
                $table->amount = (int)$product->price;
                $table->tot_amount = (int)$product->price;
    
            }

           
            $table->c_discount = (int)$request->c_discount;
            $table->time = $request->time;
            $table->date = $request->date;
            $table->status = 0;
            $table->c_o = $request->c_o;
            $table->c_code = $request->c_code;
            $table->address = $request->address;
            $table->save();
        }
        $booking = Booking::where("uid", $request->uid)
            ->where("status", 0)->get();
        return [
            "status" => true,
            "message" => "Booking done",
            "booking" => $booking
        ];
    }

    public function getbooking(Request $request)
    {
        $data = Booking::where('uid', $request->uid)
            ->where("status", (int)0)->get();

        return [
            "status" => true,
            "message" => "Booking get",
            "booking" => $data
        ];
    }

    

public function getbookingall()
{

    $data=Booking::get();
       
    return [
        "status"=>true,
        "message"=>"success",
        "booking"=>$data
    ];
}


public function getbookingwid(Request $request){

    $data=Booking::where('worker_id',$request->worker_id)
    ->get();

    return [
        "status" => true,
        "message" => "getting Booking From Wid",
        "booking" => $data
    ];
}
// public function updatebooking(Request $request)
// {
//     // $request->validate([
//     //     "id"=>"required",
//     //     "status"=>"required|integer"
//     // ]);
//     $request=$id;

//     $data = Booking::where('id', $request->id)->first();
//         $data->status = $request->status;
//         $data->save();


//         return [
//             "status" => true,
//             "message" => "Status Updated Succesfully",
//             "booking" => $data
//         ];

        


// }
public function updatebooking(Request $request){
    

    $user=Booking::find($request->id);
   
    $user->status= (int) $request->status;

    $user->save();

    return
            [
                "status" => true,
                "message" => "status updated Successfully!!!",
                "booking" => $user
            ];


}




    public function removeBooking(Request $request)
    {
        $uid = $request->uid;
        Booking::find($request->id)->delete();

        $data = Booking::where('uid', $uid)
            ->where('status', 0)->get();
        return [
            "status" => true,
            "message" => "remove from cart",
            "booking" => $data
        ];
    }


    public function editprofile(Request $request){
        // $imgName=time()."img1"."."."png";
        // $image=$request->pic;

        // $imgPath=public_path('img')."/".$imgName;
        // file_put_contents($imgPath,base64_decode($image));

        $user=Person::find($request->uid);
        // $user->pic=$imgName;
        $user->email=$request->email;
        $user->mobileno=$request->mobileno;
        $user->username=$request->username;

        $user->save();

        return
                [
                    "status" => true,
                    "message" => "profile updated Successfully!!!",
                    "person" => $user
                ];


    }


    
    public function editpassword(Request $request){
        // $imgName=time()."img1"."."."jpg";
        // $image=$request->pic;

        // $imgPath=public_path('images')."/".$imgName;
        // file_put_contents($imgPath,base64_decode($image));

        $user=Person::find($request->uid);
        // $user->pic=$imgName;
       
        $user->password=$request->password;

        $user->save();

        return
                [
                    "status" => true,
                    "message" => "password updated Successfully!!!",
                    "person" => $user
                ];


    }

    
    
    

     public function forgotapp(Request $request){
        $user = Person::where('mobileno', $request->mobileno)->first();
    
        if (!$user) {
            return [
                "status" => false,
                "message" => "User not found",
                "person" => null
            ];
        }
    
        return [
            "status" => true,
            "message" => "User found successfully",
            "id" => $user->id,  // Assuming 'id' is the primary key
            "username" => $user->username
        ];
    }
    
    
    public function getCouponFromCode(Request $request)
    {
        if (isset($request->code)) {
            $table = coupon::where('c_code', $request->code)->first();

            if (isset($table)) {
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

    public function clearCart(Request $request)
    {
        Booking::where('uid', $request->uid)
            ->where('status', 0)
            ->delete();
        $data = Booking::where('uid', $request->uid)
            ->where('status', 0)->get();
        return [
            "status" => true,
            "message" => "wish from cart",
            "booking" => $data
        ];
    }
    public function getBookinghistory(Request $request)
    {

        $data = Booking::where('uid', $request->uid)
            ->where('status', '>=', 1)->get();
        return [
            "status" => true,
            "message" => "getting cart",
            "booking" => $data
        ];
    }


    public function getwishlist(Request $request)
    {
        $uid = $request->uid;

        $data = WishList::where('uid', $uid)->get();

        return [
            "status" => true,
            "message" => "success",
            "wishlist" => $data
        ];
    }

    public function getbookinguid(Request $request)
    {
        $data = Person::where('_id', $request->id)->first();
        
        return [
            "status" => true,
            "message" => "success",
            "person" => $data
        ];
    }

    // public function getUserData(Request $request) {
    //     $data = Pers
    // }


    public function addwishlist(Request $request)
    {
        $uid = $request->uid;
        $sid = $request->sid;
    
        // Ensure service exists before adding to wishlist
        $service = Service::find($sid);
        if (!$service) {
            return [
                "status" => false,
                "message" => "Service not found",
                "wishlist" => null
            ];
        }
    
        // Check if the item is already in the wishlist
        $data = WishList::where('uid', $uid)
            ->where('sid', $sid)  // Corrected 'pid' to 'sid'
            ->first();
    
        if ($data == null) {
            $table = new WishList();
            $table->sid = $sid;
            $table->uid = $uid;
            $table->s_name = $service->sname;
            $table->s_pic1 = $service->pic1;
            $table->s_pic2 = $service->pic2;
            $table->s_pic3 = $service->pic3;
            $table->video = $service->video;
            $table->duration = $service->duration;
            $table->desc = $service->desc;
            $table->desc2 = $service->desc2;
            $table->price = $service->price;
            $table->discount = $service->discount;
            $table->rating = $service->rating;
            $table->service_id = $service->service_id;
    
            $table->save();
        }
    
        $data = WishList::where('uid', $uid)->get();
        
        return [
            "status" => true,
            "message" => "Added to wishlist successfully",
            "wishlist" => $data
        ];
    }
    


    // public function removewishlist(Request $request)
    // {
    //     $id = $request->id;
    //     $uid = $request->uid;

    //     WishList::find($id)->delete();

    //     $data = WishList::where('uid', $uid)
    //         ->get();

    //     return [
    //         "status" => true,
    //         "message" => "success",
    //         "wishlist" => $data
    //     ];
    // }

    public function removewishlist(Request $request)  {
        $id = $request->id;
        WishList::find($id)->delete();
        $data = WishList::get();
        return [
            "status"=>true,
            "message"=>"success",
            "wishlist"=>$data
        ];

    }

    public function removewishlist1(Request $request)  {
        $pid = $request->pid;
        $uid = $request->uid;

        WishList::where('pid',$pid)->where('uid',$uid)->delete();
        $data = WishList::where('uid',$uid)->get();
        return [
            "status"=>true,
            "message"=>"success",
            "wishlist"=>$data
        ];

    }
    public function getVersion()
    {


        $data = Version::get();

        return [
            "status" => true,
            "message" => "success",
            "Version" => $data
        ];
    }
    

    
}