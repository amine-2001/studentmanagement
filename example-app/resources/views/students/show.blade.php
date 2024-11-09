@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Students Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $students->name }}</h5>
        <p class="card-text">Address: {{ $students->address }}</p>
        <p class="card-text">Mobile: {{ $students->mobile }}</p>
        <a href="{{ url('students') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
