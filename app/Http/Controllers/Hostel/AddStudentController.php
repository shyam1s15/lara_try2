<?php

namespace App\Http\Controllers\Hostel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddStudentController extends Controller
{
    //
    public function getAddStudentPage(){
        return view('hostel.student.addstudent');
    }
    public function addStudent(Request $request){
        $stuName = $request->input('stu-name');
        $stuMother = $request->input('stu-mother');
        $stuDob = $request->input('stu-dob');
        $stuGender = $request->input('stu-gender');
        $stuBlood = $request->input('stu-bloodgrp');
        $stuCon1 = $request->input('stu-contact1');
        $stuCon2 = $request->input('stu-contact2');
        $stuEmail = $request->input('stu-email');
        $stuAddr = $request->input('stu-addr');

        \DB::table('students_models')->insert([
            ['stu_name'=>$stuName],
            ['stu_mother'=>$stuMother],
            ['stu_dob'=>$stuDob],
            ['stu_geneder'=>$stuGender],
            ['stu_bloodGrp'=>$stuBlood],
            ['stu_mob'=>$stuCon1],
            ['stu_mob2'=>$stuCon2],
            ['stu_email'=>$stuEmail],
            ['stu_address'=>$stuAddr],
        ]);
        dd("inserted");
        return 0;
    }
}
