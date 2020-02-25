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
            <h2 style="color:black; margin : 10px 100px">Fees</h2>

            <div class="form-group" >
            <label ><img src="{{ url('/img/name12.png') }}" height="30px" alt="" style="margin-right:10px">ER number</label>
            <input type="text" class="form-control" name="stu-er" required placeholder="Enter your ER" style=" border-color : black" >
            </div>

    

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Student Name</label>
            <input type="text" class="form-control" name="stu-name" maxlength="100" required placeholder="Enter Student name" style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px"> Amount</label>
            <input type="text" class="form-control" name="stu-fee-amount" maxlength="100" required placeholder="Enter Fee amount" style=" border-color : black">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/phon.png') }}" height="30px" alt="" style="margin-right:10px">Given Date</label>
            <input type="text" class="form-control" name="stu-contact1" maxlength="100" required placeholder="Enter given date " style=" border-color : black">
            </div>

            



            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : black; color:white; ">
           
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
