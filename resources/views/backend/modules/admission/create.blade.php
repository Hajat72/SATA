@extends('backend.layouts.auth')
@section('dash')

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
           <div class="row">
            <div class="row align-items-center">
                <div class="col-6">
                    <h4>Admission Form</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('admission.index') }}" class="btn btn-primary mt-3 ">Back</a>
                </div>
            </div>
           </div>
        </div>

        <div class="card-body">
            <form action="{{ route('admission.store') }}" method="POST">
                @csrf
                @method('POST')

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label class="form-label">Address</label>
                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>
                        @error('address')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <label class="form-label">Course</label>
                        <select class="form-control @error('course') is-invalid @enderror" name="course" required>
                            <option value="">Select Course</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Business Administration">Business Administration</option>
                        </select>
                        @error('course')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label class="form-label">Session</label>
                        <select class="form-control @error('session') is-invalid @enderror" name="session" required>
                            <option value="">Select Session</option>
                            <option value="2023-2024">2023-2024</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                        @error('session')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-center text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
