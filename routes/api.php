<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/hello', function(){
    return 'welcome to api view';
});
Route::post('/hello', function(){
    return 'welcome to api view';
});























































Route::get('/index',[AdminController::class, 'checkk']);
