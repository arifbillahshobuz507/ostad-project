<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParamiterController;
use App\Http\Controllers\PersonalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;


Route::get('/',function (){
    return view('welcome');
});


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
//single peramiter constraint
Route::get('/constraint/{constant?}',[ParamiterController::class,'get_one_peramiter_pass_constant'])->whereAlpha('constant');
Route::post('/constraint/{constant?}',[ParamiterController::class,'post_one_peramiter_pass_constraint'])->whereAlpha('constant');

//multiple peramiter constraint
Route::get('/constraints/{name?}/{name2?}/{name3?}',[ParamiterController::class,'get_multiple_peramiter_pass_constant']);
Route::post('/constraints/{name?}/{name2?}/{name3?}',[ParamiterController::class,'post_multiple_peramiter_pass_constant']);

