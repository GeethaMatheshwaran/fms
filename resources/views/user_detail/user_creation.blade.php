@extends('contacts.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('user_details') }}" method="post">
        {!! csrf_field() !!}

        <label>User Name</label></br>
        <input type="text" name="user_name" id="user_name" class="form-control"></br>

        <label>User Phone No </label></br>
        <input type="text" name="user_phone_no" id="user_phone_no" class="form-control"></br>

        <label>User Email</label></br>
        <input type="text" name="User_email" id="User_email" class="form-control"></br>

        <label>User Password</label></br>
        <input type="text" name="user_password" id="user_password" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
