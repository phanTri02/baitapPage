<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests;
use Input, File;
use Request;
use App\Http\Requests\signupRequest;
use App\Http\Controllers\signupController;

class signupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('signup');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function displayInfor(signupRequest $Request)
    {
        $user=[
            'name' =>$name =$Request-> input("name"),
            'age' =>$age =$Request-> input("age"),
            'date' =>$date =$Request-> input("date"),
            'phone' =>$phone =$Request-> input("phone"),
            'web' =>$web =$Request-> input("web"),
            'address' =>$address =$Request-> input("address"),
        ];
        return view('signup')->with('user',$user);
    }

    
}
