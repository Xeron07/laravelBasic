@extends('mainLayout')
@section('content')

<div class="container">
    <h1 style="text-align:center">Add Student</h1>


@if(Session::has('addMessage'))
<div class="alert alert-success">
  <strong>Success!</strong> {{ Session::get('addMessage') }}
</div>

@endif




<form action="/addStudent" method="POST">
    <input type="hidden" name="_token" value=" {{ csrf_token() }} ">
<div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Student Name" id="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="address">address:</label>
    <input type="text" name="address" class="form-control" placeholder="Enter address" id="address">
  </div>
  <div class="form-group">
    <label for="Phone">Phone address:</label>
    <input type="number" name="phone" class="form-control" placeholder="Enter Phone" id="Phone">
  </div>
  <div class="form-group">
    <label for="number">Total number :</label>
    <input type="number" name="number" class="form-control" placeholder="Enter number" id="number">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>



@endsection
<b></b>
