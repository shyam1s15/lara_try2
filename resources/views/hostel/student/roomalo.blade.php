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
            <h2 style="color:black; margin : 10px 100px">Room Allocation</h2>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name34.png') }}" height="30px" alt="" style="margin-right:10px">Room number</label>
            <input type="text" class="form-control" name="stu-name" required placeholder="Enter your Room number" style=" border-color : black" >
            </div>

    

            <div class="form-group" >
            <label ><img src="{{ url('/img/name12.png') }}" height="30px" alt="" style="margin-right:10px">Student Name</label>
            <input type="text" class="form-control" name="stu-contact1" maxlength="100" required placeholder="Enter student Name" style=" border-color : black">


<br>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : black; color:white;">
            <input type="reset" value="Reset" class="btn" style="background-color : black; color:white; margin : 2hp 0px" >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
