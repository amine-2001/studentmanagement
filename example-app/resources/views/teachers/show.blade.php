@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">teachers Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{ $teachers->name }}</h5>
        <p class="card-text">Address: {{ $teachers->address }}</p>
        <p class="card-text">Mobile: {{ $teachers->mobile }}</p>
        <a href="{{ url('teachers') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
