<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function basic(){
        return "<h1>Basic Route </h1>";
    }
}
