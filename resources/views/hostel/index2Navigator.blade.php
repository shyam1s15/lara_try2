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
            <a href="/test6">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Update Hostel Information</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-success big-btns">
                    <p class="big-btn-text">Important notice</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Admint/graduate students</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-info big-btns">
                    <p class="big-btn-text">Update co-workers</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-info big-btns">
                    <p class="big-btn-text">Get Various Records</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Billing Information</p>
                </button>
            </a>
            <a href="/test7">
                <button type="button" class="btn btn-success big-btns">
                    <p class="big-btn-text">Add Rooms</p>
                </button>
            </a>
            <a href="#">
                <button type="button" class="btn btn-warning big-btns">
                    <p class="big-btn-text">Manage sectors</p>
                </button>
            </a>
        </div>
    </div>
</div>



@endsection