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
// hii

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

Route::get("getHostelUpdatePage", "Hostel\HostelInfoUpdateController@getHostelUpdatePage")->name("hostelPage");

Route::post("updateHostel","Hostel\HostelInfoUpdateController@updateHostel")->name("updateHostel");

Route::get("getAddRoomPage", "Hostel\AddRoomController@getAddRoomPage")->name("addRoom");

Route::post("insertRoom","Hostel\AddRoomController@insertRoom")->name("insertRoom");

Route::get('test/rooms', function() {
    return view('rooms.index');
});


Route::get('test/hostel', function() {
return view('hostel.index2Navigator');
});
Route::get('test/hostel2',function(){
return view('hostel.index2Navigator');
})->name("showHostel");

Route::get('test/mobile', function () {
    return view("test.mobile");
});
// hello
    

Route::get('test/top-bar', function() {
    //
    return view('test.materia_top_bar');
});
//Git from Parthik123456
<<<<<<< HEAD
<<<<<<< HEAD

Route::get('test/bhavesh/try1', function() {
    //
    return view('hostel.student.addstudent');
});
//Git from Parthik123456
=======
Route::get('test/devansh/try1', function() {
=======

Route::get('test/vd/try1', function() {
>>>>>>> 80f0406a886eaa6095dba45e6f35f1ea7b58164b
    //
    return view('hostel.student.addstudent');
})->name("addStudent");
//Git from Parthik123456
<<<<<<< HEAD
>>>>>>> a55f6b980e4db7dff329d55c3c89cf499f4f27fc
=======


Route::get('test/devansh/try1', function() {
    //
    return view("hostel.student.addstudent");
})->name("addStudent");
>>>>>>> 80f0406a886eaa6095dba45e6f35f1ea7b58164b
