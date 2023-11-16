<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParamiterController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;


Route::get('/',function (){
    return view('welcome');
});

// first class routes
//Route::get('/hello', function(){
//    return "welcome to web view";
//});
//Route::post('/hello', function(){
//    return "welcome to web view";
//});


// hasin vai class routes


//basic Route
Route::get('/basic',[BasicController::class,'basic']);
Route::post('/basic',[BasicController::class,'basic']);


// parameters

//single peramiter
Route::get('/peramiter/{name?}',[ParamiterController::class,'get_peramiter']);
Route::post('/peramiter/{name?}',[ParamiterController::class,'post_peramiter']);

//Multiple peramitar
Route::get('/paramiters/{name?}/{age?}/{city?}',[ParamiterController::class,'get_paramiters']);
Route::post('/paramiters/{name?}/{age?}/{city?}',[ParamiterController::class,'post_paramiters']);

//constraints peramiter type
Route::get('/constant/{constant?}',[AdminController::class,'one_peramiter_pass_constant'])->whereAlpha('constant');
Route::get('/two_peramiter_pass_two_constant/{constant_1?}/{constant_2?}',[AdminController::class,'one_peramiter_pass_tow_constant'])->whereAlpha('constant_1')->whereNumber('constant_2');
Route::get('/request/{name?}/{name2?}/{name3?}/{name4?}',[AdminController::class,'request']);


Route::get('/person/{just}',[PersonalController::class,'person']);

























































//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/test',[AdminController::class,'check']);
//Route::get('/peramiter/{name?}',[AdminController::class,'peramiter']);
//
//Route::get('/array',[AdminController::class,'test_array']);
//Route::get('/get',[AdminController::class,'get']);
//Route::post('/get',[AdminController::class,'post']);
