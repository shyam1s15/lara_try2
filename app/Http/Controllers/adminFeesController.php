<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// our system is currently not suitable to print the actual layout of prints
// and we dont recommend to do this as now a days every hostels has its own for fees
class adminFeesController extends Controller
{
    //show pending fees first
    public function gotoStudentFeesStatusPage(){}

    // we gonna smartly use this page, where if user enters,
    // minus values it may deduct. 
    // please note every change to this function will make,
    // An entry in constant logs.
    public function studentFeesStatusPage(){}
    public function gotoUpdateStudentFeesStatusPage(Request $request){}
    public function updateStudentFeesStatus(Request $request){
        $id;//some value is necessary, must be a cluster RECOMMENDED
        $this->AppendStudentHistoryRecord($id);
    }

    public function ShowLogsOfStudentFeesHistory(Request $request,$id){}
    private function AppendStudentHistoryRecord($id){}

    // must download in the pdf format
    public function DownloadStudentFeesHistory(Request $request){}
}
