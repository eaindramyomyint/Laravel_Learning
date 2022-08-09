@extends('layout.app')

@section('content')

<div class="container my-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Edit Student</h4>
          <a href=" {{ url('students/'.$student->id) }} " class="btn btn-primary float-left">Back</a>
        </div>
        <div class="card-body">

          <form action=" {{ url('students')}} " method="POST">
          @csrf

            <h4>Students</h4>

            <div class="mb-3">
              <label>Full Name</label>
              <input type="text" name="fullname" value="{{ $student->fullname }}" class="form-control">
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="text" name="email" value="{{ $student->email }}" class="form-control">
            </div>
            <div class="mb-3">
              <label>Phone</label>
              <input type="text" name="phone" value="{{ $student->phone }}" class="form-control">
            </div>

            <h4>Students Details</h4>

            <div class="mb-3">
              <label>Alternative Phone No</label>
              <input type="text" name="alter_phone" value="{{ $student->studentDetail->alter_phone }}" class="form-control">
            </div>
            
            <div class="mb-3">
              <label>Course</label>
              <input type="text" name="course" value="{{ $student->studentDetail->course }}" class="form-control">
            </div>
            <div class="my-3">
              <label>Roll No</label>
              <input type="text" name="roll_no" value="{{ $student->studentDetail->roll_no }}" class="form-control"><br/>
            </div>
            <div class="my-3">
              <button type="submit" class="btn btn-primary my-5">Update</button>
            </div>
            
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection