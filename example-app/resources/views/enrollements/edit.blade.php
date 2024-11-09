@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrollements/' .$enrollements->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollements->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$enrollements->enroll_no}}" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrollements->batch_id}}" class="form-control"></br>
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollements->student_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollements->student_id}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$enrollements->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop