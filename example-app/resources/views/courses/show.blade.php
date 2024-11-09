@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">courses Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $courses->name }}</h5>
        <p class="card-text">syllabus: {{ $courses->syllabus }}</p>
        <p class="card-text">duration: {{ $courses->duration() }}</p>
        <a href="{{ url('courses') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
