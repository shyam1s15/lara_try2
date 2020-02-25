@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="insertRoom" method="POST" style="margin : auto ">
            <h2 style="color:maroon; margin : 10px 100px">Update Co-Workers Details</h2>



            <div class="form-group" >
            <label style="color:#003366;" ><img src="{{ url('/img/name.png') }}" height="30px" alt="" style="margin-right:10px">Name</label>
            <input type="text" class="form-control" name="no" required placeholder="Enter your Full Name" >
            </div>

            <div class="form-group" >
                <label ><img src="{{ url('/img/dob.png') }}" height="30px" alt="" style="margin-right:10px">Date of Birth</label>
                <input type="date" class="form-control" name="no" required placeholder="Enter your Bithdate">
            </div>

            <div class="form-group">
                <label><img src="{{ url('/img/147.png') }}" height="30px" alt="" style="margin-right:10px">Age</label>
                <input type="number" class="form-control" name="no" placeholder ="Enter age">
            </div>

            <div class="form-group" >
                <label ><img src="{{ url('/img/mail.png') }}" height="30px" alt="" style="margin-right:10px">Email</label>
                <input type="email" class="form-control" name="aval_mem" required="@" placeholder="Enter your Email id">
            </div>


        <div class="form-group" >
            <label ><img src="{{ url('/img/gend.png') }}" height="30px" alt="" style="margin-right:10px">Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            </div>



            <div class="form-group" >
            <label ><img src="{{ url('/img/bloo.png') }}" height="30px" alt="" style="margin-right:10px">Blood Group</label>
            <input type="text" class="form-control" name="no" maxlength="2" placeholder="Enter your blood group">
            </div>

            <div class="form-group" >
                <label >occupation</label>
                <input type="text" class="form-control" placeholder= "work of worker">
            </div>

            <div class="form-group">
            <label>salary</label>
            <input type"number" class="form-control" placeholder="salary">
            </div>

            <div class="form-group" >
                <label>Shift</label><br>

                <select name="">
                <option value="Select"></option>
                <option value="1st shift" >First shift</option>
                <option value="2nd shift">Secnd shift</option>
                <option value="3rd shift">Third shift</option>
                <option value="Overtime">Overtime</option>
                </select>
            </div>


            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px"> Mobile no</label>
            <input type="tel" class="form-control" name="no" maxlength="10" required placeholder="Enter your Mobile no ">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px">Mobile no</label><br>
            <input type="number" id="phone" class="form-control" name="phone" maxlength="10" placeholder="secondary">
           </div>




            <div class="form-group" >
            <label ><img src="{{ url('/img/add.png') }}" height="30px" alt="" style="margin-right:10px">Address</label>
            <textarea class="form-control" name="facilities" placeholder="Enter your Address">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : black; color:white; ">
            <input type="reset" value="Reset" class="btn" style="background-color : black; color:white; margin : 20px" >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
