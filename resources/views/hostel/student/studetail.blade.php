@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="{{route('storeStuHistory')}}" method="POST" style="margin : auto ">
    
            {{ csrf_field() }}
            
            @csrf
            <h2 style="color:black; margin : 10px 100px">Student History</h2>

            <div class="form-group" >
                <label ><img src="{{ url('/img/id.png') }}" height="30px" alt="" style="margin-right:10px">Erollment number</label>
                <input type=" text" class="form-control" name="stu-enroll" required placeholder="Enter your ER number" style=" border-color : orange" >
            </div>
            
            <div class="form-group" >
            <label ><img src="{{ url('/img/name12.png') }}" height="30px" alt="" style="margin-right:10px">Name</label>
            <input type="text" class="form-control" name="stu-name" required placeholder="Enter your Name" style=" border-color : black" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Native place</label>
            <input type="text" class="form-control" name="stu-native" maxlength="100" required placeholder="Enter your Native place" style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px"> Institute Name</label>
            <input type="text" class="form-control" name="stu-institute" maxlength="100" required placeholder="Enter your institute name" style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Branch</label>
            <input type="text" class="form-control" name="stu-branch" maxlength="100" required placeholder="Enter your Branch " style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Institute code</label>
            <input type="text" class="form-control" name="stu-insCode" maxlength="100" required placeholder="Enter your institute code" style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Semster</label>
            <input type="text" class="form-control" name="stu-sem" maxlength="10" required placeholder="Enter your current semster" style=" border-color : black">
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
