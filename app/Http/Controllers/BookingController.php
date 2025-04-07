<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function booking()
    {
        //
        $data = Booking::where('status', '>=', 1)->latest()->paginate(4);
        return view('booking',compact('data'));
    }
    
}
