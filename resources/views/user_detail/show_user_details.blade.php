@extends('user_details.layout')
@section('content')


<div class="card">
  <div class="card-header">User Creation Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $user_details->user_name }}</h5>
        <p class="card-text">Address : {{ $user_details->user_phone_no }}</p>
        <p class="card-text">Phone : {{ $user_details->user_email }}</p>
        <p class="card-text">Phone : {{ $user_details->user_password }}</p>
  </div>

    </hr>

  </div>
</div>
