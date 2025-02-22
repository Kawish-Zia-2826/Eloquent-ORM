@extends('layout')

@section('heading')
Update Employee
@endsection;

@section('content')
<form action="{{route('employess.update',$empp->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" value="{{$empp->name}}" class="form-control" id="name" name="name" placeholder="Enter Employee Name" required>
  </div>
  <div class="mb-3">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" value="{{$empp->city}}" id="city" name="city" placeholder="Enter City" required>
  </div>
  <div class="mb-3">
      <label for="age" class="form-label">Age</label>
      <input type="number" class="form-control" value="{{$empp->age}}" id="age" name="age" placeholder="Enter Age" required>
  </div>
  <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" value="{{$empp->email}}" id="email" name="email" placeholder="Enter Email" required>
  </div>
  <button type="submit" class="btn btn-success w-100">Add Employee</button>
</form>
</div>
<div class="text-center mt-3">
<a href="{{route('employess.index')}}" class="btn btn-primary">Back</a>
</div>

      @endsection
