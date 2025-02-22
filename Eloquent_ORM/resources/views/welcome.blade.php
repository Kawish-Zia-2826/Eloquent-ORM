@extends('layout')
@section('heading')
home
@endsection

@section('content')
      <!-- Add New Button -->
      <div class="mb-3">
        <a href="{{route('employess.create')}}" class="btn btn-success">Add New</a>
      </div>

      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($emplyess as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->city }}</td>
            <td>
              <a href="{{route('employess.show',$user->id)}}" class="btn btn-info btn-sm">View</a>
              <a href="{{route('employess.edit',$user->id)}}" class="btn btn-warning btn-sm">Update</a>
             
              <form action="{{ route('employess.destroy', $user->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?');">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
            
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
<div>
  {{ $emplyess->links() }}
</div>
@endsection