@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">enrollments Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $enrollements->enroll_no }}</h5>
        <p class="card-text">Batch: {{ $enrollements->batch_id }}</p>
        <p class="card-text">Student: {{ $enrollements->student_id }}</p>
        <p class="card-text">Join Date: {{ $enrollements->join_date }}</p>
        <p class="card-text">fee: {{ $enrollements->fee }}</p>
        <a href="{{ url('enrollements') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
