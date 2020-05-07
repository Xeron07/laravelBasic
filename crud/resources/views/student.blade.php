@extends('mainLayout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Student info</div>
        <div class="card-body">
        <p>Name: {{$data->name}}</p>
        <p>Email: {{$data->email}}</p>
        <p>Address: {{$data->address}}</p>
        <p>Phone No: {{$data->phone_no}}</p>
        <p>Total Marks:<i style="color: cadetblue"> {{$data->total_marks}}</i></p>
        </div>

      </div>
</div>
@endsection
<b></b>
