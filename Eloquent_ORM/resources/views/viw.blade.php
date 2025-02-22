@extends('layout')

@section('heading')
Employee Details
@endsection;

@section('content')
<table class="table table-bordered">
  <thead class="table-dark">
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>City</th>
          <th>Age</th>
          <th>Email</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->city}}</td>
          <td>{{$data->age}}</td>
          <td>{{$data->email}}</td>
      </tr>
    
  </tbody>
</table>

<!-- Back Button -->
<div class="text-center mt-3">
  <a href="{{route('employess.index')}}" class="btn btn-primary">Back</a>
</div>


      @endsection
