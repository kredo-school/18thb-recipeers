@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Contact Us")

@section('content')
<div class="container p-5 w-50 justify-content-center">
    <h2 class="color1 text-center my-5">Contact Us</h2>
        {{-- * add error messages to each input field --}}
        <form action="#" method="post">
            @csrf

            <label for="title" class="h6 form-label">Title: </label>
            <input type="text" name="title" id="title" class="form-control mb-3 input-color1" placeholder="What is your inquiry about?" required>

            <label for="body" class="h6 form-label">Message: </label>
            <textarea name="body" id="body" rows="5" class="form-control mb-3 input-color1" placeholder="Please enter your message..." required></textarea>

            <label for="name" class="h6 form-label">Your Name: </label>
            <input type="text" name="name" id="name" class="form-control mb-3 input-color1" placeholder="Name" required>

            <label for="email" class="h6 form-label">Your Email Address: </label>
            <input type="text" name="title" id="title" class="form-control input-color1" placeholder="Email address" required>

            <div class="form-group text-center my-5">
                <input class="form-check-input" type="checkbox" name="agreement" id="agreement" required>

                <label class="form-check-label" for="agreement">I agree to <a href="#">Privacy Policy</a> and <a href="#">Conditions of Use</a>.</label>
            </div>

            {{-- BUTTONS --}}
            <div class="row justify-content-center mt-5">
                <div class="col-3 d-flex justify-content-between">
                    <button class="btn btn-sub flex-grow-1">Cancel</button>
                </div>
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