<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Worker;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function booking()
    {
        //
        $data = Booking::where('status', '>=', 1)->latest()->paginate(4);
        $w = Worker::get();
        return view('booking',compact('data','w'));
    }
    
    public function status($id){
        $order=Booking::find($id);
        $order->status=$order->status+1;
        $order->save();
        return back();
    }

    public function assign(Request $request){
        $id=$request->id;

        $worker=Worker::find($request->worker);
        $booking=Booking::find($id);
        $booking->worker_id=$worker->_id;
        $booking->worker_name=$worker->username;
        $booking->worker_mobileno=$worker->mobileno;
        $booking->status=2;
        $booking->save();
        return redirect('/booking');
    }
}
