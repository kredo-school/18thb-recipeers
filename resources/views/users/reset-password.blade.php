@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Reset Password")

@section('content')
<div class="container p-5">
    <div class="justify-content-center">
        <h2 class="text-center color1 mb-5">Trouble logging in?</h2>

        {{-- * add error messages to each input field --}}
        <form method="post" action="{{ route('password.email') }}" class="m-auto w-75">
            @method('PATCH')
            @csrf

            <p class="text-center">Enter your email and we'll send you a link to get back into your account.</p>

            <div class="row my-3 mx-auto align-items-center">
                <div class="col-4 text-end">
                    <label for="reset_email" class="h5 form-label">{{ __('Email') }}</label>
                </div>
                <div class="col-8">
                    <input type="email" name="reset_email" id="reset_email" class="form-control w-50 input-color1 mb-3 input-color1">
                </div>
            </div>

                {{-- BUTTONS --}}
                <div class="row justify-content-center mt-5">
                    <div class="col-3 d-flex justify-content-between">
                        <input type="submit" value="Send" class="btn btn-main flex-grow-1">
                    </div>
                </div>

            {{-- after the Reset button is pressed, 
                an error message or confirmation message of sending an email will be displayed.
                Error message : The email address you entered does not match any of the existing account.
                Comfirmation message : We sent you an email for you to reset your password! --}}

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

</div>
@endsection
