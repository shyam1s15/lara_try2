@extends('master.base')

@section('styles')

@endsection

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="{{route('storeRooms')}}" method="POST" style="margin : auto ">
            @csrf
            {{ csrf_field() }}
            <h2 style=" color:green; margin : 20px 150px ">Add Rooms</h2>
            @if (session('start_index_error'))
            <div class="alert alert-primary" role="alert">
                {{ session('start_index_error') }}
            </div>
            @endif
            <div class="form-group" >
            <label ><img src="{{ url('/img/46.png') }}" height="30px" alt="" style="margin-right:10px"> Starting Room Number</label>
            <input type="text" class="form-control" name="start-room" required placeholder="Enter Room Number" >
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/46.png') }}" height="30px" alt="" style="margin-right:10px">Ending Room Number</label>
            <input type="text" class="form-control" name="end-room" required placeholder="Enter last Room Number " style="border-color : green">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/47.png') }}" height="30px" alt="" style="margin-right:10px">Member Capacity</label>
            <input type="text" class="form-control" name="total-capacity" placeholder="Enter member capacity" style="border-color : green">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/78.png') }}" height="30px" alt="" style="margin-right:10px">Categories</label>
            <input type="text" class="form-control" name="category" placeholder="Enter your category" style="border-color : green">
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/45.png') }}" height="30px" alt="" style="margin-right:10px">Facilities</label>
            <textarea class="form-control" name="facilities" placeholder="Enter Facilities" style="border-color : green">   </textarea>
            </div>

            <div class="form-group" >
            <input type="submit" value="Add" class="btn" style="background-color : green; color:white; margin-left:190px; margin-bottom:20px " >
            <input type="Reset" value="Reset" class="btn" style="background-color : green; color:white; margin-left:10px; margin-bottom:20px " >
            </div>
        </form>
        </div>
    </div>
</div>




@endsection
