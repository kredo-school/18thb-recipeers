@extends('layouts.app')

@section('title', "Contact Us")

@section('content')
<div class="container p-5 w-50 justify-content-center">
    <h2 class="color1 text-center my-5">Contact Us</h2>
    <form action="{{ route('inquiry.create') }}" method="post">
            @csrf

            <label for="title" class="h6 form-label">Title: </label>
            <input type="text" name="title" id="title" class="form-control mb-3 input-color1" value="{{ old('title') }}" placeholder="What is your inquiry about?" required>
            {{-- ERROR --}}
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror

            <label for="body" class="h6 form-label">Message: </label>
            <textarea name="body" id="body" rows="5" class="form-control mb-3 input-color1" placeholder="Please enter your message..." required>{{ old('body') }}</textarea>
            {{-- ERROR --}}
            @error('body')
                <div class="text-danger small">{{ $message }}</div>
            @enderror

            <label for="name" class="h6 form-label">Your Name: </label>
            <input type="text" name="name" id="name" class="form-control mb-3 input-color1" value="{{ old('name') }}" placeholder="Your name" required>
            {{-- ERROR --}}
            @error('name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror

            <label for="email" class="h6 form-label">Your Email Address: </label>
            <input type="text" name="email" id="email" class="form-control input-color1" value="{{ old('email') }}" placeholder="Email address" required>
            {{-- ERROR --}}
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror

            <div class="form-group text-center my-5">
                <input class="form-check-input" type="checkbox" name="agreement" id="agreement" required>
                <label class="form-check-label" for="agreement">I agree to <a href="#">Privacy Policy</a> and <a href="#">Conditions of Use</a>.</label>
            {{-- ERROR --}}
            @error('agreement')
                <div class="text-danger small">{{ $message }}</div>
            @enderror

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