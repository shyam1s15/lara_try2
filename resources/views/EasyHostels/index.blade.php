{{--  this page is specially contributed for editing hostels
        The edits may be specific for hostels and thier info,
        which must be reflected in this page, 
        specified as below
        
        hostel name
        address
        category
        description
        
        **** meeting time for admins which may be used further
        opening and closing dates,which is useful for co-workers and students
        
        **** any events which registered later will be reflected here, at beggining
            mandatory it will be none

        **** total students will be 0 which is uneditable

        we may 
    --}}
@extends('master.base')
@include('sign_ins.google-signin-page')

@section('content')
<div id="gSignInWrapper">
    <span class="label">Sign in with:</span>
    <div id="customBtn" class="customGPlusSignIn">
      <span class="icon"></span>
      <span class="buttonText">Google</span>
    </div>
  </div>
  <div id="name"></div>
@endsection
