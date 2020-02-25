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
Route::post('test/login/google/callback', 'Auth\LoginController@handleProviderCallback');

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

Route::get('test/bhavesh/try1', function() {
    //
    return view('hostel.student.addstudent');
});
//Git from Parthik123456

Route::get('test/vd/try1', function() {
    //
    return view('hostel.student.addstudent');
})->name("addStudent");
//Git from Parthik123456


Route::get('test/devansh/try1', function() {
    //
    return view("hostel.student.addstudent");
})->name("addStudent");

Route::get('test/devanshh/try1', 'Hostel\AddRoomController@getAddRoomPage')->name("addRooms");
Route::post('test/devanshh/try1', 'Hostel\AddRoomController@storeRoom')->name("storeRooms");
//Git from Parthik123456


Route::get('/test/create/addStudentPage', 'Hostel\AddStudentController@getAddStudentPage')->name('createStudent');
Route::post('/test/store/storeStudent','Hostel\AddStudentController@addStudent')->name('storeStudent');


Route::get('/test/create/updateStudentPage', 'Hostel\AddStudentController@showStudentHistory')->name('createStuHistory');
Route::post('/test/create/updateStudentPage', 'Hostel\AddStudentController@addStudentHistory')->name('storeStuHistory');



Route::get('test/devansh/try2', function() {
    //
    return view('hostel.notice.addnotice');
})->name("showNotice");
//Git from Parthik123456

Route::get('test/devansh/try3', function() {
    //
    return view('hostel.student.detail.stuhistory');
})->name("studetail");
//Git from Parthik123456

Route::get('test/devansh/try4', function() {
    //
    return view('hostel.student.studetail');
})->name("stuhistory");
//Git from Parthik123456

Route::get('test/devansh/try5', 'Hostel\roomAllocationController@createAllocation')->name("createRoomalo");
Route::post('test/devansh/try5', 'Hostel\roomAllocationController@storeAllocation')->name("storeRoomalo");

//Git from Parthik123456

Route::get('test/devansh/try6', function() {
    //
    return view('hostel.student.fees');
})->name("fees");

Route::get('test/sk/try1','Hostel\coWorkerController@createCoworker')->name('createCoworker');
Route::post('test/sk/try1','Hostel\coWorkerController@storeCoworker')->name('storeCoworker');

//Git from Parthik123456



Route::get('test/devansh/try7', function() {
    //
    return view('hostel.student.coworker');
})->name("coworker");
//Git from Parthik123456


Route::get('test/availableRoom', 'Hostel\availableRoomController@createAvailableRoom')->name('getAvailableRoom');

Route::post('test/availableRoom', 'Hostel\availableRoomController@storeAvailableRoom')->name('storeInAvailableRoom');


Route::get('sendMailToParent','MailController@sendMailToParent' )->name('sendParentMail');
// generating pdfs
Route::get('pdfview',array('as'=>'pdfview','uses'=>'ItemController@pdfview'));
Route::get('/jakas',function (){
    return view('hostel.record.record');
} )->name('record');
Route::get('/jakas2',function (){
    return view('hostel.record.studentrecord');
} )->name('studentrecord');
Route::get('/jakas3',function (){
    return view('hostel.record.roomrecord');
} )->name('roomrecord');
Route::get('/jakas4',function (){
    return view('hostel.record.foodzone');
} )->name('foodzone');

Route::get('/jakas5',function (){
    return view('hostel.record.record');
} )->name('co_workers');

