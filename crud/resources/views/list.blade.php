@extends('mainLayout')
@section('content')


<div class="container">
    <h2 style="text-align: center">Student Data</h2>


    @if(Session::has('removeMessage'))
<div class="alert alert-warning">
  <strong>Success!</strong> {{ Session::get('removeMessage') }}
</div>
<br/>

@endif


    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br/>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>Phone No</th>
          <th>Total Marks</th>
          <th>View</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody id="myTable">
          @foreach ($data as $d)
          <tr>
          <td>{{$d->uId}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->address}}</td>
            <td>{{$d->phone_no}}</td>
            <td>{{$d->total_marks}}</td>
            <td><a href="/home/{{$d->dId}}" class="btn btn-info btn-sm">View</a></td>
          <td><button type="button" onclick="location.href='/delete/{{$d->dId}}'" class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
          @endforeach

      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>



@endsection
<b></b>
