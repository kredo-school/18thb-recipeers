@extends('layouts.app')
@section('title', "Login")
@section('content')

<div class="container p-5">
    <div class="justify-content-center">
        <h2 class="text-center color1 mb-5">Welcome back to Recipeers!</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="row my-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="email" class="h5 form-label">{{ __('Email') }}</label>
                </div>
                <div class="col-8">
                    <input id="email" type="email" class="form-control w-50 input-color1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row my-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="password" class="h5 form-label text-end">{{ __('Password') }}</label>
                </div>
                <div class="col-8">
                    <input id="password" type="password" class="form-control w-50 input-color1" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="text-center mb-5">
                <input type="checkbox" name="remember" id="remember" class="form-check-input me-1 input-color1" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="text-center my-5">
                <button type="submit" class="btn btn-main px-4">
                    {{ __('Login') }}
                </button>
            </div>
            <div class="text-center mb-3">
                <p>Don't have an account?
                    @if (Route::has('register'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Sign up here.') }}
                        </a>
                    @endif
                <br>
                Did you forget your password? 
                    @if (Route::has('reset-password.show'))
                        <a class="btn btn-link" href="{{ route('reset-password.show') }}">
                            {{ __('Reset here.') }}
                        </a>
                    @endif
                </p>
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