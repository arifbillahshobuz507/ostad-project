<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecivePeramitarBody_jsonHeaderController extends Controller
{
    // specific recive header json paramiter data
    public function get_DataToPeramiterJsonHeader(Request $request):string{
        $name = $request->name;
        $age = $request->age;
        $city = $request->header('city');
        $address = $request->header('address');
        $postalcode = $request->input('postalcode');
        $zipcode = $request->input('zipcode');
        return "My name is $name age is $age My Home town is $city address is $address My postalcode is $postalcode My gip code is $zipcode";
    }

    public function post_DataToPeramiterJsonHeader(Request $request):string{
        $name = $request->name;
        $age = $request->age;
        $city = $request->header('city');
        $address = $request->header('address');
        $postalcode = $request->input('postalcode');
        $zipcode = $request->input('zipcode');
        return "My name is $name age is $age My Home town is $city address is $address My postalcode is $postalcode My gip code is $zipcode";
    }

    //all recive paramiter header json data
    public function get_DataRiciveToParamiterJsonHeader(Request $request):array{
        $name = $request->name;
        $age = $request->age;
        $headerData = $request->header();
        $jsonData = $request->input();
        return array("My name is", $name, "My age is", $age, "All Header Data is", $headerData, "All Json Data is", $jsonData);
    }
    public function post_DataRiciveToParamiterJsonHeader(Request $request):array{
        $name = $request->name;
        $age = $request->age;
        $headerData = $request->header();
        $jsonData = $request->input();
        return array("My name is", $name, "My age is", $age, "All Header Data is", $headerData, "All Json Data is", $jsonData);
    }
}
