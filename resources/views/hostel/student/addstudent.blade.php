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
            <h2 style="color:orange; margin : 10px 100px">Student Details</h2>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name12.png') }}" height="30px" alt="" style="margin-right:10px">Name</label>
            <input type="text" class="form-control" name="stu-name" required placeholder="Enter your Full Name" style=" border-color : orange" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name12.png') }}" height="30px" alt="" style="margin-right:10px">Mother name</label>
            <input type="text" class="form-control" name="stu-mother" required placeholder="Enter your Mother name" style=" border-color : orange" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/id.png') }}" height="30px" alt="" style="margin-right:10px">Student ID</label>
            <input type=" text" class="form-control" name="stu-mother" required placeholder="Enter your student id" style=" border-color : orange" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/cale.png') }}" height="30px" alt="" style="margin-right:10px">Date of Birth</label>
            <input type="date" class="form-control" name="stu-dob" required placeholder="Enter your Bithdate" style=" border-color : orange" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/ge.png') }}" height="30px" alt="" style="margin-right:10px">Gender</label><br>
            <input type="radio" id="male" name="stu-gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="stu-gender" value="female" >
            <label for="female">Female</label><br>
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/blood1.png') }}" height="30px" alt="" style="margin-right:10px">Blood Group</label>
            <input type="text" class="form-control" name="stu-bloodgrp" maxlength="2" placeholder="Enter your blood group" style=" border-color : orange">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px"> Mobile no</label>
            <input type="text" class="form-control" name="stu-contact1" maxlength="10" required placeholder="Enter your Mobile no " style=" border-color : orange">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Mobile no</label><br>
            <input type="tel" id="phone" class="form-control" name="stu-contact2" maxlength="10" placeholder="secondary" style=" border-color : orange">
           </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mail1.png') }}" height="30px" alt="" style="margin-right:10px">Email</label>
            <input type="email" class="form-control" name="stu-email" placeholder="Enter your Email id" style=" border-color : orange">
            </div>



            <div class="form-group" >
            <label ><img src="{{ url('/img/loc.png') }}" height="30px" alt="" style="margin-right:10px">Address</label>
            <textarea class="form-control" name="stu-addr" placeholder="Enter your Address" style=" border-color : orange">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : orange; color:white; ">
            <input type="reset" value="Reset" class="btn" style="background-color : orange; color:white; margin : 2hp 0px" >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
