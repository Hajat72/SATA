@extends('backend.layouts.auth')

@section('dash')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white d-flex justify-content-between">
            <h4>Edit Admission</h4>
            <a href="{{ route('admission.index') }}" class="btn btn-primary">Back</a>
        </div>
        
        <div class="card-body">
            <form action="{{ route('admission.update', $student->admission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row"></div>
                <div class="mb-6">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $student->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $student->email) }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

               <div class="row mb-3">
                <div class=" col-6 mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address', $student->address) }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-6 mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $student->phone) }}" required>
                    @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
               </div>

                <div class="row mb-3">
                    <div class="col-6 mb-3">
                        <label class="form-label">Course</label>
                        <select class="form-control @error('course') is-invalid @enderror" name="course" required>
                            <option value="">{{ $student->admission->course }}</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Business Administration">Business Administration</option>
                        </select>
                        @error('course')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label">Session</label>
                        <select class="form-control @error('session') is-invalid @enderror" name="session" required>
                            <option value="">{{ $student->admission->session }}</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                        @error('session')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
