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
          <a href="" class="btn btn-primary float-left">Add Student</a>
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
                  <td>{{ $student->alter_phone ?? "" }}</td>
                  <td>{{ $student->course ?? "" }}</td>
                  <td>{{ $student->roll_no ?? "" }}</td>
                  <td><a href=" {{ url('students/'.$student->id) }} " class="btn btn-primary float-left">Back</a></td>  
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