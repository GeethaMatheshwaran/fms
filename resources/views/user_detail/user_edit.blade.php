@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">User Form Page</div>
  <div class="card-body">

      <form action="{{ url('user_details/' .$user_details->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$user_details->id}}" id="id" />

        <label>User Name</label></br>
        <input type="text" name="user_name" id="user_name" value="{{$user_details->user_name}}" class="form-control"></br>

        <label>User Phone No</label></br>
        <input type="text" name="user_phone_no" id="user_phone_no" value="{{$user_details->user_phone_no}}" class="form-control"></br>

        <label>User Email</label></br>
        <input type="text" name="user_email" id="user_email" value="{{$user_details->user_email}}" class="form-control"></br>

        <label>User Password</label></br>
        <input type="text" name="user_password" id="user_password" value="{{$user_details->user_password}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
