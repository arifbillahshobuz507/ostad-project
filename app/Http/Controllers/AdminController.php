<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // first class
//    public function check()
//    {
//        // dd('welcome ostad project');
//        $array = ['name' => 'arif'];
//        return $array;
//    }
//    public function peramiter($name = 'arif')
//    {
//        // dd('welcome ostad project');
//        // $array = ['name'=>'arif'];
//        return "my name is $name";
//    }
//    public function test_array()
//    {
//        // dd('welcome ostad project');
//        // $array = ['name'=>'arif'];
//        $array = [
//            'name' => 'arif',
//            'email' => 'arif',
//            'age' => 10
//        ];
//        return $array;
//    }
//    public function post(Request $request)
//    {
//        return "Name is: " . $request->input("name");
//    }
//    public function get(Request $request)
//    {
//
//    }
//    public function checkk(){
//        dd('helloP');
//    }

        public function simple(){
            return "This is Simple route";
        }
        public function one_peramiter_pass($name = "arif"){
            return "this is one peramitar {$name}";
        }
        public function one_peramiter_pass_constant($constant =" "){
            return response("this is one peramitar with constant {$constant}",200);
        }
        public function one_peramiter_pass_tow_constant($constant_1 ="first" ,$constant_2="second"){
            return response("this is first peramitar with constant {$constant_1} this is second peramitar with constant {$constant_2}",200);
        }
         public function request( Request  $request ):string{
            $reg = $request->name;
            $reg2 = $request->name2;
            $reg3 = $request->name3;
            $reg4 = $request->name4;
//            return "reg = {$reg } reg2 = {$reg2} reg3 = {$reg3} reg4 = {$reg4}";
//            return "reg = {$reg } reg2 = {$reg2} reg3 = {$reg3}";
//            return "reg = ${reg } reg2 = ${reg2} reg3 = ${reg3}";
            return "name = {$reg  }";

        }
        public function paramiter(string $hello){
            return $hello;
        }

}
