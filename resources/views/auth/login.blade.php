@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container w-50 p-5">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8"> --}}
            {{-- <div class="card"> --}}
                <div class=text-md-center>
                    <h1>Welcome back to Recipeers!</h1>
                </div>
                <br>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row my-3 mx-auto">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-4">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-3 mx-auto">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-12 text-md-center">
                                <button type="submit" class="btn btn-primary w-25 my-3">
                                    {{ __('Login') }}
                                </button>
                                <br>

                                Don’t have an account? 
                                @if (Route::has('register'))
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Sign up here.') }}
                                    </a>
                                @endif
                                <br>
                                Did you forget your password? 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Reset here.') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            {{-- </div> --}}
        {{-- </div> --}}
    </div>
</div>

<div class="box">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
</div>

@endsection
