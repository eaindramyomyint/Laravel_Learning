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
          <h4>Students Details</h4>
         
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
      
                <th>Phone</th>
                <th>Course</th>
                <th>Roll No</th>
                <th>Action</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr>
                  <td>{{ $student->alter_phone ?? "" }}</td>
                  <td>{{ $student->course ?? "" }}</td>
                  <td>{{ $student->roll_no ?? "" }}</td>
                  <td><a href=" {{ url('students/'.$students->id) }} " class="btn btn-primary float-left">Back</a></td>  
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