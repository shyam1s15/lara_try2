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
            <h2 style="color:green; margin : 40px 100px">Various Records </h2>

            <center>
            <div class="form-group" >
            <div class="alert alert-primary" role="alert">
            <h5><a href="{{ route('studentrecord') }}" style="color : green">Student record</a></h5>
            </div>
            </div>

            <div class="form-group" >
            <div class="alert alert-secondary" role="alert">
            <h5> <a href="{{ route('roomrecord') }}"  style="color : green">Room record </a></h5>
            </div>
            </div>

            <div class="form-group" >
            <div class="alert alert-success" role="alert">
            <h5><a href="{{ route('foodzone') }}" style="color : green">Food zone </a> </h5>
            </div>
            </div>

            <div class="form-group" >
            <div class="alert alert-danger" role="alert">
            <h5><a href="{{ route('co_workers') }}"  style="color : green">  Co-workers</Co-workers></a> </h5>
            </div>
            </div>
        
            </center>
        </form>
        </div>
    </div>
</div>




@endsection
