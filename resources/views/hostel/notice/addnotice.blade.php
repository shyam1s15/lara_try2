@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="/test/devansh/try2Add" method="POST" style="margin : auto ">
    
            {{ csrf_field() }}
            
            @csrf
            <h2 style="color:green; margin : 40px 100px">Important Notice</h2>

            <center>
                <div class="form-group" >
                <div class="alert alert-primary" role="alert">
                <h5><a href="/test/hostel2" style="color : green">Student late Entry</a></h5>
                </div>
                </div>

            <div class="form-group" >
            <div class="alert alert-secondary" role="alert">
            <h5> <a href="/test/hostel2" style="color : green">Notification of leaving</a></h5>
            </div>
            </div>

            <div class="form-group" >
            <div class="alert alert-success" role="alert">
            <h5><a href="/test/hostel2" style="color : green">Fee Due date </a> </h5>
            </div>
            </div>

            <div class="form-group" >
            <div class="alert alert-danger" role="alert">
            <h5><a href="/test/hostel2" style="color : green">Discipline</a> </h5>
            </div>
            </div>
        
            </center>
        </form>
        </div>
    </div>
</div>




@endsection
