<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpAndContentAcceptController extends Controller
{
    Public function get_ipAccess(Request $request):string{
        return $request->ip();
    }
    Public function post_ipAccess(Request $request):string{
        return $request->ip();
    }


    //See contend accept
    public function post_SeeNegotiationType(Request $request):array{
        return  $request->getAcceptableContentTypes();
    }
    public function get_SeeNegotiationType(Request $request):array{
        return  $request->getAcceptableContentTypes();

    }

    //Define content type accept
    public function post_define_content_accept(Request $request):bool{
        if($request->accepts(['application/json'])){
            return true;
        }else{
            return false;
        }
    }
}
