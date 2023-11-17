<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    //specific header data
    //get header data
    public function get_header_data(Request $request):string{
        $name = $request->header('name');
        $age = $request->header('age');
        $city = $request->header('city');
        $address = $request->header('address');
        return "My name is {$name} My age is {$age} My city is {$city} My address is {$address}";
    }

    //post header data
    public function post_header_data(Request $request):string{
        $name = $request->header('name');
        $age = $request->header('age');
        $city = $request->header('city');
        $address = $request->header('address');
        return "My name is {$name} My age is {$age} My city is {$city} My address is {$address}";
    }




    // all header data recive

    // get all header data
    public function get_all_header_data(Request $request):array{
        return $request->header();
    }

    // post all header data
    public function post_all_header_data(Request $request){
        return $request->header();
    }
}
