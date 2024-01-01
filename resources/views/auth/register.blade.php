@extends('layouts.auth')

@section('content')

    <div class="card">
        <div class="card-body text-center">
            <h6 class="mb-4 text-muted">Create new account</h6>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3 text-start">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" id="name" placeholder="Enter Name" required>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email adress</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" id="email" placeholder="Enter Email" required>
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                    required autocomplete="new-password" id="password" placeholder="Password">
                </div>

                <div class="mb-3 text-start">
                    <label for="password_confirmation" class="form-label">Password Confirmation</label>
                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="password_confirmation" placeholder="Password Confirmation">
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">Register</button>
            </form>
            <p class="mb-0 text-muted">Allready have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    @endsection
