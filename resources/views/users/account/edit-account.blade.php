@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Recipe Title")

@section('content')
<div class="container p-5 justify-content-center">
    <h2 class="color1 text-center">Edit Your Profile</h2>
    <form action="#">
        @csrf
        @method('PATCH')

        {{-- TOP HALF --}}
        <div class="row">

            {{-- * put variables to the old helpers and values --}}
            {{-- LEFT SIDE --}}
            <div class="col-6 me-5">
                <div class="row">
                    <div class="col-6"></div>
                    <div class="col-6">
                        <img src="{{ asset('assets/images/user.jpg') }}" alt="user id" class="img-lg rounded-circle mb-4">
                    </div>
                </div>
                <div class="row align-items-cente mb-3">
                    <div class="col-4 text-end">
                        <label for="avatar" class="form-label h5 mt-1">Avatar</label>
                    </div>
                    <div class="col-8">
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="username" class="form-label h5 mt-1">Username</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="email" class="form-label h5 mt-1">Email</label>
                    </div>
                    <div class="col-8">
                        <input type="email" name="email" id="email" class="form-control" placeholder="user@email.com" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password" class="form-label h5 mt-1">Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password-confirm" class="form-label h5 mt-1">Confirm Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password-confirm" id="password-confirm" class="form-control">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="birthday" class="form-label h5 mt-1">Birthday</label>
                    </div>
                    <div class="col-8">
                        <input type="date" name="birthday" id="birthday" class="form-control" placeholder="YYYY/MM/DD" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="gender" class="form-label h5 mt-1">Gender</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" name="gender" id="gender" class="form-control" placeholder="Username" value="">
                            <option value="" selected>Select your gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="neither chosen">Prefer not to say</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="eating_pref" class="form-label h5 mt-1">Eating Preference</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select" name="eating_pref" id="eating_pref">
                            {{-- * if preference is null null --}}
                            <option value="" selected>Choose your preference</option>
                            {{-- * else pre-select an option --}}
                            <option value="vegan">Vegan</option>
                            <option value="vegetarian">Vegetarian</option>
                            <option value="halal">Halal</option>
                            <option value="hindi">Hindi Diet</option>
                        </select>
                    </div>
                </div>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="col-6">
                <button class="btn btn-sub"><i class="fa-regular fa-credit-card"></i>  Add Payment Information</button>

                <div class="row">
                    <div class="col-4">

                    </div>
                    <div class="col-8">
                        
                    </div>
                </div>
            </div>
        </div>
        {{-- BOTTOM HALF --}}
        {{-- * when the user clicks the checkbox as the business account --}}
        <hr class="color2 my-5">
        {{-- BUSINESS INFORMATION --}}
        <div class="row">
            <h3 class="color1">Business Information</h3>
            <div class="row">
                {{-- LEFT SIDE --}}
                <div class="col-6">

                </div>
                {{-- RIGHT SIDE --}}
                <div class="col-6">

                </div>
            </div>
            {{-- BUTTONS --}}
        </div>
    </form>
</div>
@endsection