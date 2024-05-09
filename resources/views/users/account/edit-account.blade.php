@extends('layouts.app')

@section('title', "Edit $user->username's Profile")

@section('content')
<div class="container p-5 justify-content-center">
    <h2 class="color1 text-center">Edit Your Profile</h2>
    <div class="d-flex align-items-end justify-content-end my-4">
        <a href="#" class="btn btn-sub"><i class="fa-regular fa-credit-card me-2"></i>Add Payment Information</a>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        {{-- TOP HALF --}}
        <div class="row">

            {{-- LEFT SIDE --}}
            <div class="col-6 me-5">
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="image" class="form-label h5 mt-1">Avatar</label>
                    </div>
                    <div class="col-8">
                        <input type="file" name="image" id="image" class="form-control input-color1">

                        @if ($errors->has('image'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('image') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="username" class="form-label h5 mt-1">Username</label>
                    </div>
                    <div class="col-8">
                        <input type="text" name="username" id="username" class="form-control input-color1" placeholder="Username" value="{{ isset($user) ? $user->username : old('username') }}">

                        @if ($errors->has('username'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('username') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="email" class="form-label h5 mt-1">Email</label>
                    </div>
                    <div class="col-8">
                        <input type="email" name="email" id="email" class="form-control input-color1" placeholder="user@email.com" value="{{ isset($user) ? $user->email : old('email') }}">

                        @if ($errors->has('email'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('email') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password" class="form-label h5 mt-1">Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password" id="password" class="form-control input-color1" autocomplete="new-password">

                        @if ($errors->has('password'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('password') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="password_confirmation" class="form-label h5 mt-1">Confirm Password</label>
                    </div>
                    <div class="col-8">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-color1">

                        @if ($errors->has('password'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('password') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="birthday" class="form-label h5 mt-1">Birthday</label>
                    </div>
                    <div class="col-8">
                        <input type="date" name="birthday" id="birthday" class="form-control input-color1" placeholder="YYYY/MM/DD" value="{{ isset($user) ? $user->birthday : old('birtyday') }}">

                        @if ($errors->has('birthday'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('birthday') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="gender" class="form-label h5 mt-1">Gender</label>
                    </div>
                    <div class="col-8">
                        <select name="gender_id" id="gender_id" class="form-select input-color1" value="{{ isset($user) ? $user->gender_id : old('gender_id') }}">
                            <option value="" selected>Select your gender</option>
                            <option value="1">Male</option>
                            <option value="2">Female</option>
                            <option value="3">Prefer not to say</option>
                        </select>

                        @if ($errors->has('gender_id'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('gender_id') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="eating_pref" class="form-label h5 mt-1">Eating Preference</label>
                    </div>
                    <div class="col-8">
                        <select class="form-select input-color1" name="eating_pref_id" id="eating_pref_id" value="{{ isset($user) ? $user->eating_pref_id : old('eating_pref_id') }}">
                            {{-- * if preference is null null --}}
                            <option value="" selected>Choose your preference</option>
                            {{-- * else pre-select an option --}}
                            <option value="1">Vegan</option>
                            <option value="2">Vegetarian</option>
                            <option value="3">Halal</option>
                            <option value="4">Hindi Diet</option>
                        </select>

                        @if ($errors->has('eating_pref_id'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('eating_pref_id') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            {{-- RIGHT SIDE --}}
            <div class="col">
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="nationality" class="form-label h5 mt-1">Nationality</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the countries --}}
                        <select name="nationality_id" id="nationality_id" class="form-select input-color1" value="{{ isset($user) ? $user->nationality_id : old('nationality_id') }}">
                            <option value="" selected>Select your nationality</option>
                            <?php
                            $csvFile = '/assets/data/all.csv';
                            $countryId = 1;
                            // Open the CSV
                            if (($handle = fopen(public_path($csvFile), 'r')) !== false) {
                                fgetcsv($handle);
                                while (($row = fgetcsv($handle)) !== false) {
                                    $countryName = $row[0];
                                    echo "<option value=\"$countryId\">$countryName</option>";
                                    $countryId++;
                                }
                                // Close
                                fclose($handle);
                            }
                            ?>
                        </select>

                        @if ($errors->has('nationality_id'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('nationality_id') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="residence_city" class="form-label h5 mt-1">City of Residence</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the major cities --}}
                        <select name="residence_city_id" id="residence_city_id" class="form-select input-color1" value="{{ isset($user) ? $user->residence_city_id : old('residence_city_id') }}">
                            <option value="" selected>Select your city of residence</option>
                            <?php
                            $csvFile = '/assets/data/cities.csv';
                            // Open the CSV
                            if (($handle = fopen(public_path($csvFile), 'r')) !== false) {
                                while (($row = fgetcsv($handle)) !== false) {
                                    $cityId = $row[0];
                                    $cityName = $row[1];
                                    echo "<option value=\"$cityId\">$cityName</option>";
                                }
                                // Close
                                fclose($handle);
                            }
                            ?>
                        </select>

                        @if ($errors->has('residence_city_id'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('residence_city_id') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-3">
                    <div class="col-4 text-end">
                        <label for="job_status" class="form-label h5 mt-1">Job Status</label>
                    </div>
                    <div class="col-8">
                        {{-- * get the list of the major cities --}}
                        <select class="form-select input-color1" name="job_status_id" id="job_status_id" class="form-control" value="{{ isset($user) ? $user->job_status_id : old('job_status_id') }}">
                            <option value="" selected>Select your job status</option>
                            <option value="1">Full-time</option>
                            <option value="2">Part-time</option>
                            <option value="3">Business Owner</option>
                            <option value="4">Self-employed</option>
                            <option value="5">Internship</option>
                            <option value="6">Student</option>
                            <option value="7">None of the above</option>
                        </select>

                        @if ($errors->has('job_status_id'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('job_status_id') }}</li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
                <div class="row form-group align-items-center mb-4">
                    <div class="col-4 text-end">
                        <label for="introduction" class="form-label h5 mt-1">Introduction</label>
                    </div>
                    <div class="col-8">
                        <textarea name="introduction" id="introduction" rows="8" class="form-control input-color1" placeholder="Please introduce yourself." value="{{ isset($user) ? $user->introduction : old('introduction') }}"></textarea>

                        @if ($errors->has('introduction'))
                            <div class="text-danger small">
                                <ul>
                                    <li>{{ $errors->first('introduction') }}</li>
                                </ul>
                            </div>
                        @endif

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
                <a href="{{ route('profile.show', $user->id) }}" class="btn btn-sub flex-grow-1">Cancel</a>
            </div>
            <div class="col-2 d-flex justify-content-between">
                <input type="submit" value="Save" class="btn btn-main flex-grow-1">
            </div>
        </div>

        {{-- Delete Button --}}
        <div class="text-end h5">
            <button type="button" class="btn btn-trash" data-bs-toggle="modal" data-bs-target="#account-softdelete{{ $user->id }}">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </div>
    </form>

    {{-- Import Modal --}}
    @include('modals.edit-account-delete')

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
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
</div>
@endsection
