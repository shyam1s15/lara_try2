<?php

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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin','middleware' => ['adminLoginMiddleware'] ],function(){
    Route::get('login','adminLoginController@login')->name('admin.login');

    Route::get('login/google/getCredential','adminLoginController@getGoogleCredentialLogin');
    Route::get('login/google/credential','adminLoginController@googleCredentialLogin');

    Route::get('login/facebook/getCredential','adminLoginController@getFacebookCredentialLogin');
    Route::get('login/facebook/credential','adminLoginController@facebookCredentialLogin');

    Route::get('register','adminLoginController@register')->name('admin.register');
    // Route::get('register/credential','');//we dont have this as only 1 route
    Route::get('students','adminController@students')->name('admin.students');
    Route::get('students/create','adminController@createStudentPage')->name('admin.students.create');
    Route::post('students/create','adminController@createStudent');
});


Route::group(['prefix' => 'hostel'], function() {
    //
    
    Route::get('/', function() {
        // 
    });
    
});


Route::group(['prefix' => 'hostel','middleware'=>'hostelViewMiddleware'],function(){
    Route::get('');
});
Route::get('privacyPolicy', function () {
    return view('privacy-policy');
});
// testing begins here
Route::get('test',function (){
    return view('admin.admin-login');
});

Route::get('test2',function (){
    return view('master.base');
});

Route::get('test/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('test/login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('test3',function (){
    return view('test.test');
});

Route::get('test4', function() {
    //
    return view('EasyHostels.index');
});



Route::get('test5', function() {
    //
    return view("index");
});

Route::get("test6",function (){
     return view("hostel/UpdateHostelInfo"); 
});

Route::get("test7",function (){
    return view("hostel/AddRooms"); 
});

// Route::get("test7", 
// });

Route::get('test/rooms', function() {
    return view('rooms.index');
});


Route::get('test/hostel', function() {
return view('hostel.index2Navigator');
});

Route::get('test/mobile', function () {
    return view("test.mobile");
});


Route::get('test/top-bar', function() {
    //
    return view('test.materia_top_bar');
});
//Git from Parthik123456
