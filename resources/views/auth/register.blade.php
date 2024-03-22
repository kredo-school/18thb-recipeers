@extends('layouts.app')
@section('title', "Register")
@section('content')

<div class="container p-5">
    <div class="row justify-content-center">
        <h2 class="text-center color1 mb-5">Welcome to Recipeers!</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="username" class="h5 form-label">{{ __('Username') }}</label>
                </div>
                <div class="col-8">
                    <input id="username" type="text" class="form-control w-50 input-color1" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="email" class="h5 form-label text-end">{{ __('Email') }}</label>
                </div>
                <div class="col-8">
                    <input id="email" type="email" class="form-control w-50 input-color1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="password" class="h5 col-8 form-label text-end">{{ __('Password') }}</label>
                </div>
                <div class="col-8">
                    <input id="password" type="password" class="form-control w-50 input-color1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="password-confirm" class="h5 col-6 form-label text-end">{{ __('Confirm Password') }}</label>
                </div>
                <div class="col-8">
                    <input id="password-confirm" type="password" class="form-control w-50 input-color1" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="text-md-center mb-3">
                <input type ="checkbox" name="checkbox_name" id="" value="1" class="text-md-end form-check-input me-1 input-color1">
                I agree to <a class="privactpolicy-link" href="{{ url('/privactpolicy') }}">Privacy Policy</a> and <a class="conditionsofuse-link" href="{{ url('/conditionsofuse') }}">Conditions of Use</a>. *
            </div>

            <div class="text-md-center my-5">
                <button type="submit" class="btn btn-main px-4">
                    {{ __('Register') }}
                </button>
            </div>
            <div class="text-center">
                Already have an account? <a class="login-link" href="{{ route('login') }}">Log in here</a>.
            </div>
        </form>
    </div>
</div>

<div class="box">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
</div>
@endsection