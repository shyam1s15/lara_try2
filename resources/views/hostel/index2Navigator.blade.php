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
            <a href="{{ route('hostelPage') }}">
                <button type="button" class="btn btn-warning big-btns">
                    <h5 class="big-btn-text">Update Hostel Information</h5>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-success big-btns">
                    <h5 class="big-btn-text">Important notice</h5>
                </button>
            </a>
            <a href="{{ route('addStudent') }}">
                <button type="button" class="btn btn-warning big-btns">
                    <h5 class="big-btn-text">Admint/graduate students</h5>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-info big-btns">
                    <h5 class="big-btn-text">Update co-workers</h5>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-info big-btns">
                    <h5 class="big-btn-text">Get Various Records</h5>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <h5 class="big-btn-text">Billing Information</h5>
                </button>
            </a>
            <a href="{{ route('addRoom') }}">
                <button type="button" class="btn btn-success big-btns">
                    <h5 class="big-btn-text">Add Rooms / Update Rooms</h5>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <h5 class="big-btn-text">Manage FoodZone</h5>
                </button>
            </a>
        </div>
    </div>
</div>



@endsection