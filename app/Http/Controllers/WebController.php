<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function myshop()
    {
        $address = "IT cp KKU";
        $mobilephone = "0888888888";
        $location = "khon khen";
            return view('myshop',[
                'address' =>$address,
                'mobilephone'=>$mobilephone,
                'location'=>$location
            ]);
    }
}