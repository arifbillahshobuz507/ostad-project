<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    // specific recive json data
    public function get_json_body_data(Request $request):string{
       $name = $request->input('name');
       $age = $request->input('age');
       $city = $request->input('city');
       return "My name is $name My age is $age My Home town is $city";
    }
    public function post_json_body_data(Request $request):string{
       $name = $request->input('name');
       $age = $request->input('age');
       $city = $request->input('city');
       return "My name is $name My age is $age My Home town is $city";
    }


    //Multiple recive json data
    public function get_multiple_json_body_data(Request $request):array{
        return $request->input();
    } public function post_multiple_json_body_data(Request $request):array{
        return $request->input();
    }
}
