@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Reset Password")

@section('content')
<div class="container p-5 w-50 justify-content-center">
    <h2 class="color1 text-center my-5">Trouble logging in?</h2>
        {{-- * add error messages to each input field --}}
        <form action="#" method="post" class="m-auto w-75">
            @method('PATCH')
            @csrf

            <p class="text-center">Enter your email and we'll send you a link to get back into your account.</p>

            <div class="input_email w-50 m-auto">
                <label for="reset_email" class="h6 form-label">Email:</label>
                <input type="email" name="reset_email" id="reset_email" class="form-control mb-3 input-color1">
            </div>

            {{-- BUTTONS --}}
            <div class="row justify-content-center mt-5">
                <div class="col-3 d-flex justify-content-between">
                    <input type="submit" value="Send" class="btn btn-main flex-grow-1">
                </div>
            </div>
        </form>
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
