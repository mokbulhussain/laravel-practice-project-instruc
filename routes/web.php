<?php

use Illuminate\Support\Facades\Route;

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
    return view('home',['page_name'=>'Home Page','name'=>'Laravel Course']);
})->name('home');

Route::get('/about-us',function (){
    $page="About Page";
    $title="About";
    $count=11;
    $color="orange";
    return view('about',compact('page','title','count','color'));
})->name('about');

Route::get('/contact-page',function(){
    return view('contact',['page_name'=>'Contact Page','name'=>'Laravel Course']);
})->name('contact');

Route::get('/service-page',function (){
    $service=['web','mobile','digital','graphisc'];
    return view('service',['service'=>$service]);
})->name('service');


//single routing parameter
//Route::get('/service-page/{service_id}',function ($service_id){
//    return $service_id;
//})->name('service');

//Route::get('/service-page/{service_id}/{service_name}',function ($service_id,$service_name){
//    return $service_id.$service_name;
//})->name('service');


//double routing parameter
//Route::get('/service-page/{service_id}/{service_name?}',function ($service_id,$service_name=null){
//    return $service_id.$service_name;
//})->name('service');


//regular expression routing
//Route::get('/user/{name}',function ($name){
//    return $name;
//})->where('name','[A-Za-z]+');
//
//Route::get('/user/{id}/{name}',function($id,$name){
//    return $id.$name;
//})->where(['id'=>'[1-9]+','name'=>'[a-z]+']);
//
//Route::get('/product/{category}',function($category){
//    return $category;
//})->whereIn('category',['pen','paper','bus']);
//
//Route::get('/search/{keyword}',function($keyword){
//    return $keyword;
//})->where('keyword','.*');
