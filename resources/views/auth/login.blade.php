@extends('layouts.app')

@section('content')
    <!-- Preloader -->
    <div class="preloader"></div>

    <div id="main-wrapper" class="auth-customizer-none d-flex flex-column min-vh-100">
        <div class="d-flex flex-grow-1 justify-content-center align-items-center w-100" 
             style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);">
            <div class="row w-100 g-0">
                <!-- Left Column: Image (Visible on large screens only) -->
                <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-center px-5">
                    <img src="{{ asset('backend/images/backgrounds/security.webp') }}" alt="modernize-img" 
                         class="img-fluid" style="border-radius: 20px; max-width: 80%; height: auto;">
                </div>

                <!-- Right Column: Login Form -->
                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center px-4">
                    <div class="card shadow-lg border-0 rounded-4 p-4 w-100" style="max-width: 400px;">
                        <div class="card-body text-center">
                            <!-- Logo Positioned Above the Welcome Text -->
                            <img src="{{ asset('backend/images/logos/favicon.png') }}" alt="Logo" width="60" class="mb-3">

                            <!-- Welcome Text -->
                            <h2 class="fs-4 fw-bold mb-2">Welcome to Modernize</h2>
                            <p class="mb-4">Admin Dashboard</p>
                            
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3 text-start">
                                    <label for="email" class="form-label fs-6">Email Address</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 text-start">
                                    <label for="password" class="form-label fs-6">Password</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" 
                                               {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">Remember this Device</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary w-100 py-2 rounded-2">
                                    Sign In
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        html, body {
            height: 100%;
            overflow: hidden; /* Prevent scrolling */
        }
        #main-wrapper {
            flex-grow: 1; /* Ensures it takes full viewport height */
        }
    </style>
@endsection
