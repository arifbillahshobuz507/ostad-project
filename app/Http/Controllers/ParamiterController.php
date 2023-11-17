<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParamiterController extends Controller
{
    //single peramiter
   Public function get_peramiter($nam = "riya"):string{
    return "My Name is $nam";
   }
   Public function post_peramiter($nam = "riya"):string{
    return "My Name is $nam";
   }

    //Multiple peramitar
   Public function get_paramiters($name = "riya", $year = 30, $city = "kushita"):string{
    //return "My Name is $name";
    //return "My Name is $name and my age is {$year}";
    return "My Name is $name and my age is {$year} and my city name is {$city}";
   }
   Public function post_paramiters($name = "riya", $year = 23, $city = "kushita"):string{
    return "My Name is $name";
    //return "My Name is $name and my age is {$year}";
    //return "My Name is $name and my age is {$year} and my city name is {$city}";
   }

   //constraints peramiter type
   //single peramiter constraint
    public function get_one_peramiter_pass_constant( $constant= "riya"):string{
       return "My name is {$constant}";
    }
    public function post_one_peramiter_pass_constraint( $constant= "riya"):string{
       return "My name is {$constant}";
    }

    //multiple peramiter constraint
    public function get_multiple_peramiter_pass_constant($name=null,$age=null, $city = null):string{
       return "My name is {$name} My age is {$age} My home town is {$city}";
    }
    public function post_multiple_peramiter_pass_constant($name=null,$age=null, $city = null):string{
       return "My name is {$name} My age is {$age} My home town is {$city}";
    }
}
