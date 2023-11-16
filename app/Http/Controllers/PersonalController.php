<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function person( Request $just ){
        $name = $just->input("name",);
        $age = $just->input("age");
        return "My name is {$name} and My age is {$age}";
    }
}
