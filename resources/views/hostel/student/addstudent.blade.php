@extends('master.base')

@section('styles')
.big-btns{
{{-- font-size: 50px; --}}
width: 200px;
height: 200px;
margin: 40px;
}

#grad1 {
height: 100vh;
background-color: grey; /* For browsers that do not support gradients */
background-image: linear-gradient(lightblue, lightpink); /* Standard syntax (must be last) */
}
.big-btn-text{
font-size: large;
}
@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
            <a href="{{ route('studetail') }}">
                <button type="button" class="btn btn-info big-btns">
                    <h5 class="big-btn-text">Student Details</h5>
                </button>
            </a>
            <a href="{{ route('createStuHistory')}}">
                <button type="button" class="btn btn-dark big-btns">
                    <h5 class="big-btn-text">Student History</h5>
                </button>
            </a>
        
            <a href="{{ route('createRoomalo')}}">
                <button type="button" class="btn btn-info big-btns">
                    <h5 class="big-btn-text">Room Allocation</h5>
                </button>
            </a>

            <a href="{{ route('fees')}}">
                <button type="button" class="btn btn-dark big-btns">
                    <h5 class="big-btn-text">Student Fees</h5>
                </button>
            </a>
        </div>
    </div>
</div>



@endsection