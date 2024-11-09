@extends('layout')
@section('content')
  
<div class="card mt-4">
    <div class="card-header">
        <h2>Student Application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm mb-3" title="Add New Student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>
                        <td>
                            <a href="{{ url('/students/' . $item->id) }}" class="btn btn-info btn-sm" title="View Student">
                                <i class="fa fa-eye" aria-hidden="true"></i> View
                            </a>
                            <a href="{{ url('/students/' . $item->id . '/edit') }}" class="btn btn-primary btn-sm" title="Edit Student">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>

                            <!-- Ensure each form has a unique id -->
                            <form id="delete-form-{{ $item->id }}" method="POST" action="{{ url('/students/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="button" class="btn btn-danger btn-sm" title="Delete Student" onclick="confirmDelete('{{ $item->id }}')">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
                            </form>
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
    function confirmDelete(studentId) {
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
                document.getElementById('delete-form-' + studentId).submit();
            }
        });
    }
</script>

@endsection
