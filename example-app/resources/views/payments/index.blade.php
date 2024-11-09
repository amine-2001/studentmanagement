@extends('layout')
@section('content')
  
<div class="card mt-4">
    <div class="card-header">
        <h2>Student Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/payments/create') }}" class="btn btn-success btn-sm mb-3" title="Add New Course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Enrollement No</th>
                        <th>Paid Date</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($payments as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->enrollement->enroll_no }}</td>
                        <td>{{ $item->paid_date}}</td>
                        <td>{{ $item->amount}}</td>
                        <td>
                            <a href="{{ url('/payments/' . $item->id) }}" class="btn btn-info btn-sm" title="View Student">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/payments/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit Student">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>

                            <!-- Ensure each form has a unique id -->
                            <form id="delete-form-{{ $item->id }}" method="POST" action="{{ url('/payments/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="button" class="btn btn-danger btn-sm" title="Delete Student" onclick="confirmDelete('{{ $item->id }}')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
                            <a href="{{ url('/report/report1/' . $item->id) }}" class="btn btn-info btn-sm" title="Edit Payment">
                                <button class="fa fa-print" aria-hidden="true"></button> Print
                            </a>    
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    function confirmDelete(batchId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Find the correct form and submit it
                document.getElementById('delete-form-' + batchId).submit();
            }
        });
    }
</script>

@endsection
