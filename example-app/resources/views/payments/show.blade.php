@extends('layout')
@section('content')

<div class="card mt-4">
    <div class="card-header">
        <h3 class="card-title">Payment Page</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title">Enrollement No: {{enrollement->enroll_no}}</h5>
        <p class="card-text">course: {{$item->paid_date}}</p>
        <p class="card-text">duration: {{$item->amount}}</p>
        <a href="{{ url('payments') }}" class="btn btn-primary">Back to List</a>
    </div>
</div>

@endsection
