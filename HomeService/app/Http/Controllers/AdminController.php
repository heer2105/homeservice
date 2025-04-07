<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Booking;
// use App\Models\Cart;
use App\Models\Category;
use App\Models\Combo;
use App\Models\Coupon;
use App\Models\Service;
use Faker\Provider\ar_EG\Person;
// use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function open_register()  {
        return view('register');
    }

    public function myprofile()  {
        return view('myprofile');
    }
  
    

    public function search(Request $request) {
        // If search is empty, redirect to home
        if (empty($request->search)) {
            return redirect('/home');
        }
    
        $searchTerms = explode(' ', strtolower($request->search)); // Split input into words
    
        $services = Service::where(function ($query) use ($searchTerms) {
            $orConditions = [];
    
            foreach ($searchTerms as $term) {
                $orConditions[] = ['sname' => ['$regex' => $term, '$options' => 'i']]; // Case-insensitive regex
            }
    
            if (!empty($orConditions)) {
                $query->whereRaw(['$or' => $orConditions]); // Proper MongoDB $or query
            }
        })->get();
    
        return view('search', compact('services'));
    }
    
     
    public function update_profile(Request $request) {
        $request->validate(
            [
                "username"=>"required ",
                "email"=>"required ",
                "password"=>"required ",
                "mobile_no"=>"required ",
            ]
            );
            $user=session()->get('user');
            $table=Admin::find($user->_id);
            $table->username=$request->username;
            $table->email=$request->email;
            $table->mobile_no=$request->mobile_no;
            $table->save();
            session()->put('user',$table);
            return redirect("/myprofile")->withSuccess("Updated successfully!!!");

    
        
    }
   
    public function register(Request $request)  {

        $request->validate([
            "username" => "required",
            "password" => "required|min:6|max:8",
            "cpassword" => "required|min:6|max:8",
            "email" => "required|email",
            "mobile_no" => "required|digits:10",
            "role" => "required",
            "sec_que" => "required",
            "sec_ans" => "required",
            "gender" => "required"

        ]);

        $table=new Admin();
        $table->username=$request->username;
        $table->password=$request->password;
        $table->cpassword=$request->cpassword;
    
        $table->mobile_no=$request->mobile_no;
        $table->email=$request->email;
        $table->role=$request->role;
        $table->sec_que=$request->sec_que;
        $table->sec_ans=$request->sec_ans;
        $table->gender=$request->gender;

        $table->save();
        return redirect('/')->withSuccess("Registered Successfully");


        
    }
    
    public function open_login() {
        
        $user=session()->get('user');
        if(isset($user)){
        return redirect("home");
    }
    else{
        return view('login');
        
    }
    }

    public function login(Request $request)  {
       

        $request->validate([
            "username" => "required ",
            "password" => "required"
        ]);
        $data=Admin::where('username', $request->username)
            ->where('password', $request->password)->first();

            if($data!=null){
                session()->put('user',$data);
                return redirect("home");
            }else{
                return redirect("/")->withSuccess("Username Or Password not matched");
            }
    }

    public function home() {


        $c_count = Category::count(); 
        $p_count=Service::count();
        // $u_count=Person::count();
        $u_count=0;
        $b_count=Banner::count();
        $cou_count=Coupon::count();
        $r=Booking::where('status',1)->sum('tot_amount');
        $o_count=Booking::count();
        $combo_c=Combo::count();
        $services = Service::all(); // Fetch all services from the database


        return view('home', compact('c_count','p_count','u_count','r','o_count','b_count','cou_count','combo_c','services'));

        
    }

    public function open_forgot_pwd()  {
        return view('fpassword');
        
    }


    public function open_reset_pwd()  {
        return view('reset_password');
        
    }

    public function open_cpwd()  {

        return view('cpwd');
        
    }

    public function forgot_password(Request $request)  {

        $data = Admin::where('username', $request->username)
        ->where("sec_que", $request->sec_que)
        ->where("sec_ans", $request->sec_cans)
        ->first();
    
    if (!$data) {
        return back()->with('success', 'Invalid User');
    }else{
        $username=$request->username;
        return view('reset_password',compact('username'));
    }
    
    // Debugging
    
        
    }
    public function reset_password(Request $request) {
        $request->validate([
            "password"=>"required",
            "cpassword"=>"required | same:password"
        ]);

        $table=Admin::where('username',$request->username)->first();
        $table->password=$request->password;
        $table->save();

        return redirect("/")->withSuccess("Reset password Successfully!!!");
        
    }
    public function logout()  {

        session()->flush();
        return redirect("/");
        
    }


}