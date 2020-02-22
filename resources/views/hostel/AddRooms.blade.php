@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="insertRoom" method="POST" style="margin : auto ">
            <h2 style="margin : 20px 150px ">Add Rooms</h2>
            
            <div class="form-group" >
            <label ><img src="{{ url('/img/room_no.png') }}" height="30px" alt="" style="margin-right:10px">Room No</label>
            <input type="text" class="form-control" name="no" placeholder="Enter Room No">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/total_mem.png') }}" height="30px" alt="" style="margin-right:10px">Total Member</label>
            <input type="text" class="form-control" name="total_mem" placeholder="Enter Total Member">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/aval_mem.png') }}" height="30px" alt="" style="margin-right:10px">Available Member</label>
            <input type="text" class="form-control" name="aval_mem" placeholder="Enter Available Member">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/facilities.png') }}" height="30px" alt="" style="margin-right:10px">Facilities</label>
            <textarea class="form-control" name="facilities" placeholder="Enter Facilities">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : red; color:white; margin-left:190px; margin-bottom:20px " >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection