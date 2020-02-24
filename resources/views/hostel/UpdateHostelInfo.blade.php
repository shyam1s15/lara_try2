@extends('master.base')

@section('content')
<div id="grad1">
    <div class="container">
        <div class="row">
        <form action="{{ route('updateHostel') }}" method="POST" style="margin : auto ">
            {{ csrf_field() }}
            <h2 style="margin : 20px 50px ">Update Hostel Information</h2>
            
            <div class="form-group" >
            <label ><img src="{{ url('/img/hostel_nm.png') }}" height="30px" alt="" style="margin-right:10px">Hostel Name</label>
            <input type="text" class="form-control" name="h-name" placeholder="Enter Hostel Name">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/address.png') }}" height="30px" alt="" style="margin-right:10px">Address</label>
            <input type="text" class="form-control" name="h-address" placeholder="Enter Address">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/category.png') }}" height="30px" alt="" style="margin-right:10px">Category</label>
            <input type="text" class="form-control" name="h-category" placeholder="Enter Category">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/description.png') }}" height="30px" alt="" style="margin-right:10px">Description</label>
            <textarea class="form-control" name="h-description" placeholder="Enter Category">   </textarea>
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/contact.png') }}" height="30px" alt="" style="margin-right:10px">Hostel Contact</label>
            <input type="text" class="form-control" name="h-contact" placeholder="Enter Contact">   
            </div>

            <div class="form-group" >
            <label ><img src="{{ url('/img/email.png') }}" height="30px" alt="" style="margin-right:10px">Hostel E-Mail</label>
            <input type="email" class="form-control" name="h-email" placeholder="Enter E-Mail">   
            </div>

            <div class="form-group" >
            <input type="submit" value="Update" class="btn" style="background-color : red; color:white; margin-left:190px; margin-bottom:20px " >
            </div>
        </form>
        </div>
    </div>
</div>



@endsection