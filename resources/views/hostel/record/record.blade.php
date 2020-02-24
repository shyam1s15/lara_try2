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
background-image: linear-gradient(pink, white); /* Standard syntax (must be last) */
}
.big-btn-text{
font-size: large;
}
@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
            <a href="{{ route('studentrecord') }}">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Student Record</p>
                </button>
            </a>
            
            <a href="{{ route('addStudent') }}">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Room Record/Details</p>
                </button>

            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">FoodZone Details</p>
                </button>

                <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Co-Workers Details</p>
                </button>
           
        </div>
    </div>
</div>



@endsection