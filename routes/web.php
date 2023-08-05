<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cured;
use App\Http\Controllers\c1;
use App\Http\Controllers\cured1;
use App\Http\Controllers\bike12;
use App\Http\Controllers\c3;
use App\Http\Controllers\c4;
use App\Http\Controllers\c5;
use App\Http\Controllers\c7;
use App\Http\Controllers\c8;
use App\Http\Controllers\c6;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::view('form1','form1');
// Route::post('form1',[cured::class,'getdata']);
// // if(auth()->check())
// // {
// //     route::get('isdata',[cured::class,'show']);
// // }
// // else{
// //     return"";
// // }
// route::get('form',[App\Http\Controllers\HomeController::class,'index1']);
// Route::get('listData',[cured::class,'show']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// // Route::get('delete/{id}',[cured::class,'delete']);
// route::get('editData/{id}',[cured::class,'fetchData']);
// route::get('editData',[cured::class,'updateData']);



// Route::get('bike1',[bike12::class,'us']);
// Route::post('bike1',[bike12::class,'store']);
// Route::view('bform','bform');




//  Route::get('search',[bike12::class,'disp_data']);
//  Route::get('delete/{id}',[bike12::class,'del_data']);
//  Route::get('edit/{id}',[bike12::class,'fetch_data']);
// Route::get('edit',[bike12::class,'update_data']); 
 Route::view('form1','form1');
// Route::post('form1',[bike12::class,'add_data']);
Route::view('listData','listData');
// Route::view('isdata','isdata'); 
//Route::view('search','search');
// Route::get('edit/{id}',[bike12::class,'ed']);
// Route::get('edit',[bike12::class,'ed']);
// Route::post('form1',[bike12::class,'getdata']);
// Route::get('listData',[bike12::class,'fd']);
// Route::get('edit',[bike12::class,'ud']);
// Route::get('delete/{id}',[bike12::class,'del']);

//admin login
Route::view('home1','home1');
Route::view('alogin','alogin');
Route::post('alogin',[cured1::class,'getdata']);


route::get('logout',function(){

	if(session()->has('name'))
	{
		session()->pull('name');
	}
	return redirect('login');
});

Route::view('image','image');
Route::post('image',[c6::class,'add']);
Route::get('home',[c6::class,'search']);
Route::post('home',[c6::class,'search_name']);



Route::get('edit/{id}',[c7::class,'ed']);
Route::get('edit',[c7::class,'ed']);
Route::get('edit',[c7::class,'updateData']);

Route::get('edit1/{id}',[c5::class,'edd']);
Route::get('edit1',[c5::class,'edd']);
Route::get('edit1',[c5::class,'update']);




Route::view('data1','data1');
Route::get('data1',[c8::class,'sho']);





Route::view('car','car');
//Route::view('home','home');
Route::view('bcar','bcar');
Route::post('bcar',[c4::class,'getdata']);
Route::view('cardata','cardata');
Route::view('caredit','caredit');
Route::get('cardata',[c4::class,'show']);
route::post('caredit/{id}',[c4::class,'fe']);
route::get('caredit',[c4::class,'up']);
Route::get('delete/{id}',[c4::class,'delete']);
Route::view('b1','b1');
Route::view('rform','rform');
Route::view('tform','tform');
Route::view('t1','t1');
Route::view('admin_page','admin_page');
Route::view('rvDetails','rvDetails');
route::view('tdDetails','tdDetails');
Route::post('logout',[c1::class,'lo'])->name('logout');
Route::post('rform',[c5::class,'getform']);
Route::post('tform',[c7::class,'get']);
Route::post('tdata',[c7::class,'show']);
Route::view('rayyan','rayyan');
Route::view('fetch','fetch');
Route::get('tdDetails',[c7::class,'show']);
Route::view('bform','bform');
Route::get('rvDetails',[c5::class,'show']);
Route::get('b4/{id}',[c6::class,'get_detail']);
Route::view('b2','b2');
Route::view('b3','b3');
Route::view('s1','s1');
Route::view('s2','s2');
Route::view('s4','s3');
Route::view('s4','s4');
Route::view('bk1','bk1');
Route::view('about','about');
Route::get('delete1/{id}',[c5::class,'delete']);
Route::get('delete/{id}',[c7::class,'delete']);

Route::view('reg','reg');
Route::post('reg',[c8::class,'insert']);
Route::post('reg',[c8::class,'insert']);

Route::view('login','login');
Route::post('login',[c8::class,'login']);

Route::get('data',[c8::class,'show']);





Route::view('submit','submit');
Route::view('rdata','rdata');



Route::view('manage','manage');
Route::get('manage',[c6::class,'update2']);
