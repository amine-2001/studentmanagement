@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Payment Page</div>
  <div class="card-body">
      
      <form action="{{ url('payments') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <select name="enrollement_id" id="enrollement_id" class="form-control">
          @foreach($enrollements as $id => $enroll_no)
          <option value="{{$id}}">{{$enroll_no}}</option>
          @endforeach
        </select>
        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>
        <!--<input type="text" name="course_id" id="course_id" class="form-control"></br>-->
        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop