@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Batche Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $batches->name }}</h5>
        <p class="card-text">course: {{ $batches->course->name }}</p>
        <p class="card-text">duration: {{ $batches->start_date }}</p>
        <a href="{{ url('batches') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
