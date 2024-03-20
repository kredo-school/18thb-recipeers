@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Recipe Title")

@section('content')
<div class="container p-5 justify-content-center">
    <h2 class="color1 text-center">Edit Your Profile</h2>
    <div class="d-flex align-items-end justify-content-end my-4">
        <a href="#" class="btn btn-sub"><i class="fa-regular fa-credit-card me-2"></i>Add Payment Information</a>
    </div>

    {{-- * add error messages to each input field --}}
    <form action="#">
        @csrf
        @method('PATCH')

        {{-- TOP HALF --}}
        <div class="row">

            {{-- * put variables to the old helpers and values --}}
            {{-- LEFT SIDE --}}
            <div class="col-6 me-5">
                <div class="row align-items-cente mb-3">
                    <div class="col-4 text-end">
                        <label for="avatar" class="form-label h5 mt-1">Avatar</label>
                    </div>
                    <div class="col-8">
                        <input type="file" name="image" id="image" class="form-control input-color1">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="username" class="form-label h5 mt-1">Username</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="username" id="username" class="form-control input-color1" placeholder="Username" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="email" class="form-label h5 mt-1">Email</label>
                    </div>
                    <div class="col-8">
                        <input type="email" name="email" id="email" class="form-control input-color1" placeholder="user@email.com" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password" class="form-label h5 mt-1">Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password" id="password" class="form-control input-color1">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password-confirm" class="form-label h5 mt-1">Confirm Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password-confirm" id="password-confirm" class="form-control input-color1">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="birthday" class="form-label h5 mt-1">Birthday</label>
                    </div>
                    <div class="col-8">
                        <input type="date" name="birthday" id="birthday" class="form-control input-color1" placeholder="YYYY/MM/DD" value="">
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="gender" class="form-label h5 mt-1">Gender</label>
                    </div>
                    <div class="col-8">
                        <select name="gender" id="gender" class="form-select input-color1">
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
                        <select class="form-select input-color1" name="eating_pref" id="eating_pref">
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
            <div class="col">
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="nationality" class="form-label h5 mt-1">Nationality</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the countries --}}
                        <select name="nationality" id="nationality" class="form-select input-color1" value="">
                            <option value="" selected>Select your nationality</option>
                            <option value="Japan">Japan</option>
                            <option value="Canada">Canada</option>
                            <option value="New Zealand">New Zealand</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="residence_city" class="form-label h5 mt-1">City of Residence</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the major cities --}}
                        <select name="residence_city" id="residence_city" class="form-select input-color1">
                            <option value="" selected>Select your city of residence</option>
                            <option value="Tokyo">Tokyo</option>
                            <option value="Ottawa">Ottawa</option>
                            <option value="Wellington">Wellington</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="job_status" class="form-label h5 mt-1">Job Status</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the major cities --}}
                        <select class="form-select input-color1" name="job_status" id="job_status" class="form-control">
                            <option value="" selected>Select your job status</option>
                            <option value="Full-time">Full-time</option>
                            <option value="Part-time">Part-time</option>
                            <option value="Business Owner">Business Owner</option>
                            <option value="Self-employed">Self-employed</option>
                            <option value="Internship">Internship</option>
                            <option value="Student">Student</option>
                            <option value="Other">None of the above</option>
                        </select>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-4 text-end">
                        <label for="introduction" class="form-label h5 mt-1">Introduction</label>
                    </div>
                    <div class="col-8">
                        <textarea name="introduction" id="introduction" rows="8" class="form-control input-color1" placeholder="Please introduce yourself."></textarea>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-10 text-end">
                        <label for="business_info" class="form-label">Do you want to switch to a business account?</label>
                    </div>
                    <div class="col-2 mb-2 text-end">
                        <input type="checkbox" name="business_info" id="business_info" class="form-check-input input-color1 me-1" onchange="toggleBusinessInfo()"> Yes
                    </div>
                </div>
            </div>
        </div>
        {{-- BOTTOM HALF --}}
        {{-- * when the user clicks the checkbox as the business account --}}
        <div id="businessInfoContainer" style="display: none;">
            <hr class="color2 my-5">
            {{-- BUSINESS INFORMATION --}}
            <div class="row">
                <h3 class="color1 mb-5 text-center">Business Information</h3>
                <div class="row">
                    {{-- LEFT SIDE --}}
                    <div class="col-6">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-end">
                                <label for="business_name" class="form-label h5 mt-1">Business Name</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="business_name" id="business_name" class="form-control input-color1" placeholder="Name of your company/restaurant" value="">
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-end">
                                <label for="location" class="form-label h5 mt-1">Location</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="location" id="location" class="form-control input-color1" placeholder="Location" value="">
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-end">
                                <label for="pic" class="form-label h5 mt-1">Person in Charge</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="pic" id="pic" class="form-control input-color1" placeholder="Name of person in charge" value="">
                            </div>
                        </div>
                    </div>
                    {{-- RIGHT SIDE --}}
                    <div class="col-6">
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-end">
                                <label for="hp_url" class="form-label h5 mt-1">Website</label>
                            </div>
                            <div class="col-8">
                                <input type="url" name="hp_url" id="hp_url" class="form-control input-color1" placeholder="URL of your business website" value="">
                            </div>
                        </div>
                        <div class="row align-items-center mb-3">
                            <div class="col-4 text-end">
                                <label for="delivery_url" class="form-label h5 mt-1">Delivery Service</label>
                            </div>
                            <div class="col-8">
                                <input type="url" name="delivery_url" id="delivery_url" class="form-control input-color1" placeholder="Link to your delivery service webpage" value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- BUTTONS --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2 d-flex justify-content-between">
                <button class="btn btn-sub flex-grow-1">Cancel</button>
            </div>
            <div class="col-2 d-flex justify-content-between">
                <input type="submit" value="Save" class="btn btn-main flex-grow-1">
            </div>
        </div>
    </form>
    
</div>
<script>
    function toggleBusinessInfo() {
        var container = document.getElementById('businessInfoContainer');
        var checkbox = document.getElementById('business_info');
        
        if (checkbox.checked) {
            container.style.display = 'block';
        } else {
            container.style.display = 'none';
        }
    }
</script>
<div class="box">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
</div>
@endsection