@extends('layout.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col-md-12">

    @if (session('message'))
      <h4 class="alert alert-success">{{ session('message') }}</h4>
    @endif
      <div class="card">
        <div class="card-header">
          <h4>Students List</h4>
          <a href="{{ url('students/create') }}" class="btn btn-primary float-left">Add Student</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>FullName</th>
                <th>Emial</th>
                <th>Students Details</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->fullname }}</td>
                  <td>{{ $student->email }}</td>
                  <td><a href="{{ url('students/'.$student->id.'/details') }}" class="btn btn-success btn-sm">Check</a></td>
                  <td>
                    <a href="{{ url('students/'.$student->id.'/edit') }}" class="btn btn-success btn-sm">Edit</a>
                    <!--<a href="" class="btn btn-danger btn-sm">Delete</a>-->
                    <form action='{{url("students/$student->id")}}' method="post" class="d-inline">
                      @csrf
                      @method('PUT')
            
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td>
                    
                  
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection