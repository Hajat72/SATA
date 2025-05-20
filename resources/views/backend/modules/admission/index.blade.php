@extends('backend.layouts.auth')
@section('dash')

<div class="card">
    <div class="row align-items-center">
        <div class="row">
            <div class="col-10">
                <h5 class="card-header mb-3">Admission Index</h5>
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
                    <th>Action</th>
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
                        <a href="{{ route('admission.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('admission.delete', $student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center"><strong>No records found...</strong></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection