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
        $stuER = $request->input('stu-enroll');
        $stuName = $request->input('stu-name');
        // $stuEr = $request->input('stu-er');
        $stuMother = $request->input('stu-mother');
        $stuDob = $request->input('stu-dob');
        $stuGender = $request->input('stu-gender');
        $stuBlood = $request->input('stu-bloodgrp');
        $stuCon1 = $request->input('stu-contact1');
        $stuCon2 = $request->input('stu-contact2');
        $stuEmail = $request->input('stu-email');
        $stuAddr = $request->input('stu-addr');
        $stuParentEmail = $request->input('stu-parent-email');
        \DB::table('students_models')->insert([
            ['stu_er'=>$stuER,
            'stu_name'=>$stuName,
            // 'stu_er'=>$stuEr,
            'stu_mother'=>$stuMother,
            'stu_dob'=>$stuDob,
            'stu_gender'=>$stuGender,
            'stu_bloodGrp'=>$stuBlood,
            'stu_mob'=>$stuCon1,
            'stu_mob2'=>$stuCon2,
            'stu_email'=>$stuEmail,
            'stu_address'=>$stuAddr,
            'stu_parent_email'=>$stuParentEmail
            ]
        ]);
        // dd("inserted");
        return redirect(route('addStudent'));
    }
    public function showStudentHistory(){
        return view('hostel.student.studetail');
    }
    public function addStudentHistory(Request $request){
        $stuEroll = $request->input('stu-enroll');
        $stuName = $request->input('stu-name');
        $stuNative = $request->input('stu-native');
        $stuIns = $request->input('stu-institute');
        $stuBranch = $request->input('stu-branch');
        $stuInsCode = $request->input('stu-insCode');
        $stuSem = $request->input('stu-sem');

        $result = \DB::table('students_models')
        ->where('stu_er','=',$stuEroll)->first();

        if($result === null){
            return redirect()->route('createStuHistory')
            ->with('stu_NotExists',"Please check if student exists or not")
            ->withInput();
        }
        \DB::table('students_models')->where('stu_er','=',$stuEroll)
        ->update([
            'stu-name'=>$stuName,
            'stu-native'=>$stuNative,
            'stu-institute'=>$stuIns,
            'stu-branch'=>$stuBranch,
            'stu-insCode'=>$stuInsCode,
            'stu-sem'=>$stuSem
        ]);
        return redirect()->route('createStuHistory')
            ->with('stu_Inserted',"Record inserted Successfully")
            ->withInput();
    }
}
