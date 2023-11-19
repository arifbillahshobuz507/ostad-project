<?php


use App\Http\Controllers\FormController;
use App\Http\Controllers\IpAndContentAcceptController;
use App\Http\Controllers\ParamiterController;
use App\Http\Controllers\RecivePeramitarBody_jsonHeaderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\HeaderController;

Route::get('/',function (){
    return view('welcome');
});


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
Route::get('/constraints/{name?}/{name2?}/{name3?}',[ParamiterController::class,'get_multiple_peramiter_pass_constant'])->whereAlpha('name')->whereNumber('name2')->whereAlpha('name3');
Route::post('/constraints/{name?}/{name2?}/{name3?}',[ParamiterController::class,'post_multiple_peramiter_pass_constant'])->whereAlpha('name')->whereNumber('name2')->whereAlpha('name3');



//request json data with body routes
//specific recive json data
Route::get('/specific_jeson_data',[JsonController::class,'get_json_body_data']);
Route::post('/specific_jeson_data',[JsonController::class,'Post_json_body_data']);

//Multiple recive json data
Route::get('/multiple_jeson_data',[JsonController::class,'get_multiple_json_body_data']);
Route::post('/multiple_jeson_data',[JsonController::class,'Post_multiple_json_body_data']);



// request header data routes
//specific header data
Route::get('/header_data',[HeaderController::class, 'get_header_data']);
Route::post('/header_data',[HeaderController::class, 'post_header_data']);

//all header data recive
Route::get('/all_header_data',[HeaderController::class, 'get_all_header_data']);
Route::post('/all_header_data',[HeaderController::class, 'post_all_header_data']);



//Recive request data accept to paramiter json header

// specific data recive to paramiter json header
Route::get('/recive_data_to_peramiter_json_header/{name?}/{age?}',[RecivePeramitarBody_jsonHeaderController::class,'get_DataToPeramiterJsonHeader']);
Route::post('/recive_data_to_peramiter_json_header/{name?}/{age?}',[RecivePeramitarBody_jsonHeaderController::class,'post_DataToPeramiterJsonHeader']);

//All request data accept to paramiter json header
Route::get('/all_recive_data_to_peramiter_json_header/{name}/{age}',[RecivePeramitarBody_jsonHeaderController::class,'get_DataRiciveToParamiterJsonHeader']);
Route::post('/all_recive_data_to_peramiter_json_header/{name}/{age}',[RecivePeramitarBody_jsonHeaderController::class,'post_DataRiciveToParamiterJsonHeader']);



// Recive form data || Multipat/Form data || image  file
Route::post('/recive_form_data', [FormController::class, 'formData']);
Route::post('/upload_form_data',[FormController::class, 'filerecive']);



// Locate Ip Address
Route::get('/ip_access',[IpAndContentAcceptController::class,'get_ipAccess']);
Route::post('/ip_access',[IpAndContentAcceptController::class,'post_ipAccess']);


//Content negotiation || content accept type
//see accept negotiation type
Route::post('/see_negotiation_type',[IpAndContentAcceptController::class,'post_SeeNegotiationType']);
Route::get('/see_negotiation_type',[IpAndContentAcceptController::class,'get_SeeNegotiationType']);

//define who content|negotitaiton type accept
Route::post('define_concetn_type_accept',[IpAndContentAcceptController::class,'post_define_content_accept']);

