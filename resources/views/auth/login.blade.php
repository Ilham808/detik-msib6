@extends('layouts.auth')

@section('content')
    <div class="card">
        <div class="card-body text-center">
            <h6 class="mb-4 text-muted">Login to your account</h6>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 text-start">
                    <label for="email" class="form-label">Email adress</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" placeholder="Enter Email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                        id="password" placeholder="Password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 text-start">
                    <div class="form-check">
                        <input class="form-check-input" name="remember" type="checkbox" id="check1"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary shadow-2 mb-4">{{ __('Login') }}</button>
            </form>
            <p class="mb-0 text-muted">Don't have account yet? <a href="{{ route('register') }}">Signup</a></p>
        </div>
    </div>
@endsection
