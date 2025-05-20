@extends('backend.layouts.auth')
@section('dash')

<div class="card">
    <div class="row align-items-center">
        <div class="row">
            <div class="col-10">
                <h5 class="card-header">Service Index</h5>
            </div>
            <div class="col-2">
                <a href="{{ route('service.create') }}" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>S#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($models as $model)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $model->title ?? 'NA' }}</td>
                    <td>{{ $model->description ?? 'NA' }}</td>
                    <td>{{ $model->icon ?? 'NA' }}</td>
                    <td>
                        <a href="{{ route('service.edit', $model->id )}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('service.delete', $model->id ) }}" class="btn btn-sm btn-danger">Delete</a>
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