<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{

    public function check()
    {
        // dd('welcome ostad project');
        $array = ['name' => 'arif'];
        return $array;
    }
    public function peramiter($name = 'arif')
    {
        // dd('welcome ostad project');
        // $array = ['name'=>'arif'];
        return "my name is $name";
    }
    public function test_array()
    {
        // dd('welcome ostad project');
        // $array = ['name'=>'arif'];
        $array = [
            'name' => 'arif',
            'email' => 'arif',
            'age' => 10
        ];
        return $array;
    }
    public function post(Request $request)
    {
        return "Name is: " . $request->input("name");
    }
    public function get(Request $request)
    {
        return "<form action='/get' method ='post'>
            

            <input type='text' name='name'>
            <input type='submit' value='Submit'>  
            </form>";
    }
    public function checkk(){
        dd('helloP');
    }
}
