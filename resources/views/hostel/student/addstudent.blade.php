@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="/test/devansh/try1Add" method="POST" style="margin : auto ">
    
            {{ csrf_field() }}
            
            @csrf
            <h2 style="color:maroon; margin : 10px 100px">Student Details</h2>

            <div class="form-group" >
            <label style="color:#003366;" ><img src="{{ url('/img/name.png') }}" height="30px" alt="" style="margin-right:10px">Name</label>
            <input type="text" class="form-control" name="stu-name" required placeholder="Enter your Full Name" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name.png') }}" height="30px" alt="" style="margin-right:10px">Mother name</label>
            <input type="text" class="form-control" name="stu-mother" required placeholder="Enter your Mother name">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/dob.png') }}" height="30px" alt="" style="margin-right:10px">Date of Birth</label>
            <input type="date" class="form-control" name="stu-dob" required placeholder="Enter your Bithdate">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/gend.png') }}" height="30px" alt="" style="margin-right:10px">Gender</label><br>
            <input type="radio" id="male" name="stu-gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="stu-gender" value="female">
            <label for="female">Female</label><br>
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/bloo.png') }}" height="30px" alt="" style="margin-right:10px">Blood Group</label>
            <input type="text" class="form-control" name="stu-bloodgrp" maxlength="2" placeholder="Enter your blood group">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px"> Mobile no</label>
            <input type="text" class="form-control" name="stu-contact1" maxlength="10" required placeholder="Enter your Mobile no ">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px">Mobile no</label><br>
            <input type="tel" id="phone" class="form-control" name="stu-contact2" maxlength="10" placeholder="secondary">
           </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mail.png') }}" height="30px" alt="" style="margin-right:10px">Email</label>
            <input type="email" class="form-control" name="stu-email" placeholder="Enter your Email id">
            </div>



            <div class="form-group" >
            <label ><img src="{{ url('/img/add.png') }}" height="30px" alt="" style="margin-right:10px">Address</label>
            <textarea class="form-control" name="stu-addr" placeholder="Enter your Address">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : black; color:white; ">
            <input type="reset" value="Reset" class="btn" style="background-color : black; color:white; margin : 2hp 0px" >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
