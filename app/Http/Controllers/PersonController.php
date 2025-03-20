<?php

namespace App\Http\Controllers;

use App\Models\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //
    public function index() {
        $data= person::paginate(4);
        return view('person',compact('data'));
    }
    
}
