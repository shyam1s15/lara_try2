@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="insertRoom" method="POST" style="margin : auto ">
<<<<<<< HEAD
            <h2 style="margin : 20px 150px ">Add Rooms</h2>
            
            <div class="form-group" >
            <label ><img src="{{ url('/img/room_no.png') }}" height="30px" alt="" style="margin-right:10px">Room No</label>
            <input type="text" class="form-control" name="no" placeholder="Enter Room No">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/total_mem.png') }}" height="30px" alt="" style="margin-right:10px">Total ABC</label>
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
=======
            <h2 style="color:maroon; margin : 10px 100px">Student Details</h2>
            
            <div class="form-group" >
            <label style="color:#003366;" ><img src="{{ url('/img/name.png') }}" height="30px" alt="" style="margin-right:10px">Name</label>
            <input type="text" class="form-control" name="no" required placeholder="Enter your Full Name" >   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name.png') }}" height="30px" alt="" style="margin-right:10px">Mother/Father name</label>
            <input type="text" class="form-control" name="no" required placeholder="Enter your Mother/father name">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/dob.png') }}" height="30px" alt="" style="margin-right:10px">Date of Birth</label>
            <input type="date" class="form-control" name="no" required placeholder="Enter your Bithdate">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/gend.png') }}" height="30px" alt="" style="margin-right:10px">Gender</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/bloo.png') }}" height="30px" alt="" style="margin-right:10px">Blood Group</label>
            <input type="text" class="form-control" name="no" maxlength="2" placeholder="Enter your blood group">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px"> Mobile no</label>
            <input type="text" class="form-control" name="no" maxlength="10" required placeholder="Enter your Mobile no ">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mob.png') }}" height="30px" alt="" style="margin-right:10px">Mobile no</label><br>
            <input type="tel" id="phone" class="form-control" name="phone" maxlength="10" placeholder="secondary">      
           </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/mail.png') }}" height="30px" alt="" style="margin-right:10px">Email</label>
            <input type="email" class="form-control" name="aval_mem" placeholder="Enter your Email id">   
            </div>
 
            

            <div class="form-group" >
            <label ><img src="{{ url('/img/add.png') }}" height="30px" alt="" style="margin-right:10px">Address</label>
            <textarea class="form-control" name="facilities" placeholder="Enter your Address">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : black; color:white; ">            
            <input type="reset" value="Reset" class="btn" style="background-color : black; color:white; margin : 20px" >
>>>>>>> a55f6b980e4db7dff329d55c3c89cf499f4f27fc
            </div>
        </form>
        </div>
    </div>
</div>




@endsection