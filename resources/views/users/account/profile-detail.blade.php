@extends('layouts.app')

@section('title', "Profile Detail")

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row px-5 me-2">

                <!-- Avatar -->
                <div class="col-auto">
                    @if($user->avatar)
                        <img src="{{ $user->avatar }}" alt="" class="rounded">
                    @else
                        <i class="fa-solid fa-circle-user icon-lg color1"></i>
                    @endif
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col">
                            <span class="badge badge-pref border rounded-pill">Vegan</span>
                        </div>
                        <div class="col" class="text-align-right">
                            <button type="button" class="btn btn-main px-5">Edit</button>
                        </div>
                    </div>
                    <p>Username</p>
                    <p>Introduction......</p>
                    <p>
                        <span>10 Recipes</span>
                        <span class="ms-4">17 Followers</span>
                        <span class="ms-4">9 Following</span>
                    </p>
                </div>

                {{-- If this is a business account --}}
                <!-- Business Info -->
                <div class="col-lg-4 col-md-4 col-12 ms-4 business-info-box">
                    <h4 class="mt-1">Business Info</h4>
                    <h6>
                        Website
                        <a href="https:testaaaaaaaa.com" class="url-display">https:testaaaaaaaa.com</a>
                    </h6>
                    <h6 class="mb-3">
                        Order delivery
                        <a href="https:testbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb.com" class="url-display">https:testbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb.com</a>
                    </h6>
                    <div>
                        <a href="" class="sns-icon">
                            <i class="fa-brands fa-x-twitter me-1 h4"></i>
                        </a>
                        <a href="" class="sns-icon">
                            <i class="fa-brands fa-instagram me-1 h4 ms-1"></i>
                        </a>
                        <a href="" class="sns-icon">
                            <i class="fa-brands fa-facebook me-1 h4 ms-1"></i>
                        </a>
                        <a href="" class="sns-icon">
                            <i class="fa-brands fa-tiktok h4 ms-1"></i>
                        </a>
                    </div>
                </div>  <!-- End of Business Info -->
            </div>
        </div>

    </div>

    <div class="row ms-5">
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row px-5">
                <h4 class="color1 ms-5 my-4">Posted Recipes</h4>
            </div>
        </div>
    </div>

    {{-- <div class="dropdown mb-3 ms-5">
        <button class="btn dropdown-toggle dropdown-menu-togglebtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        New To Old
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Old to new</a></li>
        </ul>
    </div> --}}

    <div class="row justify-content-center mb-5">

    <!-- card index -->
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row px-5">

                <!-- card -->
                <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto border-bottom-none">
                            <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                        </div>
                        {{-- card body --}}
                        <div class="card-body">
                            <div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Recipe Title --}}
                            <div class="row">
                                <h4>Recipe Title</h4>
                            </div>
                            {{-- Recipe Over View --}}
                            <div class="row">
                                <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-main">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto border-bottom-none">
                            <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                        </div>
                        {{-- card body --}}
                        <div class="card-body">
                            <div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Recipe Title --}}
                            <div class="row">
                                <h4>Recipe Title</h4>
                            </div>
                            {{-- Recipe Over View --}}
                            <div class="row">
                                <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-main">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto border-bottom-none">
                            <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                        </div>
                        {{-- card body --}}
                        <div class="card-body">
                            <div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Recipe Title --}}
                            <div class="row">
                                <h4>Recipe Title</h4>
                            </div>
                            {{-- Recipe Over View --}}
                            <div class="row">
                                <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-main">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>  <!-- End of recipes-->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
