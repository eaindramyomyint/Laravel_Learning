@extends('layout.app')

@section('content')

<div class="container center my-5">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-center">Student Registeration Form</h4>
          <a href=" {{ url('students')}} " class="btn btn-primary float-right">Back</a>
        </div>
        <div class="card-body">

          <form action=" {{ url('students')}} " method="POST">
            @csrf

            <h4>Students Info :</h4>

            <div class="mb-3">
              <label>Full Name</label>
              <input type="text" name="fullname" class="form-control">
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="text" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label>Phone</label>
              <input type="text" name="phone" class="form-control">
            </div>

            <h4>Students Details Info :</h4>

            <div class="mb-3">
              <label>Alternative Phone No</label>
              <input type="text" name="alter_phone" class="form-control">
            </div>
            
            <div class="mb-3">
              <label>Course</label>
              <input type="text" name="course" class="form-control">
            </div>
            <div class="my-3">
              <label>Roll No</label>
              <input type="text" name="roll_no" class="form-control"><br/>
            </div>
            <div class="my-3">
              <button type="submit" class="btn btn-primary my-5">Save</button>
            </div>
            
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection