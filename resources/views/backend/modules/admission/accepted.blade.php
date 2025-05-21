@extends('backend.layouts.auth')

@section('dash')
    <style>
        .action-divider {
            display: inline-block;
            border-left: 1px dotted #6b7280;
            height: 1.5rem;
            vertical-align: middle;
            margin: 0 0.5rem;
        }
        .dropdown-toggle::after {
            display: none; /* Hide default Bootstrap arrow */
        }
        .dropdown-menu {
            min-width: 100px;
            border-radius: 0.25rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        .dropdown-item {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
        }
        .dropdown-item i {
            margin-right: 0.5rem;
        }
    </style>

    <div class="card">
        <div class="row align-items-center">
            <div class="row">
                <div class="col-10">
                    <h5 class="card-header mb-3">Admission accepted</h5>
                </div>
                <div class="col-2">
                    <a href="{{ route('admission.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>S#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Session</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @forelse($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name ?? 'NA' }}</td>
                            <td>{{ $student->email ?? 'NA' }}</td>
                            <td>{{ $student->address ?? 'NA' }}</td>
                            <td>{{ $student->phone ?? 'NA' }}</td>
                            <td>{{ $student->admission->course ?? 'NA' }}</td>
                            <td>{{ $student->admission->session ?? 'NA' }}</td>
                            <td>

<a href="#"
   class="btn btn-sm btn-success me-1 {{ $student->admission->status == 'accepted' ? 'disabled' : '' }}">
    Accepted
</a>
<a href="{{ route('reject.index') }}"
   class="btn btn-sm btn-danger me-1 {{ $student->admission->status == 'rejected' ? 'disabled' : '' }}">
    Rejected
</a>

                                <span class="action-divider"></span>
                                <div class="dropdown d-inline-block">
                                    <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admission.edit', $student->id) }}">
                                                <i class="bi bi-pencil"></i> Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form action="{{ route('admission.delete', $student->id) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item text-danger">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
    <td colspan="8" class="text-center py-4">
        <strong>No records found...</strong>
    </td>
</tr>

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'This admission record will be deleted!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endsection