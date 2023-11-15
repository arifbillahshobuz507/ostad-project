<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// first class routes
Route::get('/hello', function(){
    return "welcome to web view";
});
Route::post('/hello', function(){
    return "welcome to web view";
});


// hasin vai class routes
Route::get('/geeet',[AdminController::class,'one_peramiter_pass']);
























































//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/test',[AdminController::class,'check']);
//Route::get('/peramiter/{name?}',[AdminController::class,'peramiter']);
//
//Route::get('/array',[AdminController::class,'test_array']);
//Route::get('/get',[AdminController::class,'get']);
//Route::post('/get',[AdminController::class,'post']);
