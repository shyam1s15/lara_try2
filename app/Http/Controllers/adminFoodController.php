<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminFoodController extends Controller
{
    //
    public function gotoSetMonthlyFoodPage(){}
    public function setMonthlyFood(Request $request){}

    // weekly scedule should only work specific way as given below
    // start date and end date, it must also look for start and end of month
    public function gotoSetWeeklyFoodPage(){}
    public function setWeeklyFood(Request $request){}

    //  using this function the scedules and bills should only be changed for today
    //  it will not affect the scedule of week or month
    public function gotoSetTodayFoodPage(){}
    public function setTodayFood(Request $request){}


}
