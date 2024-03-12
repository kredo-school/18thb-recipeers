@extends('layouts.app')

@section('content')
<div class="home-top text-center">
    <div class="card">
        <img src="{{ asset('/assets/images/home_top.jpeg') }}" alt="home top image" class="home-top-img">
        <div class="card-img-overlay d-flex">
            <div class="m-auto">
                <h1 class="Welcome-text text-success fw-bold display-1">Welcome to Recipeers!</h1>
                <p class="top-text h5">Recipe sharing platform for Vegans, Vegetarians and people with religious dietary restrictions.</p>
                <p class="text-success h5 mt-5">Start now for free!</p>
                <button type="submit" class="btn btn-lg btn-warning text-white w-25 shadow">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<div class="home pt-5">
    <div class="container">
        <div class="row">
            <h1 class="text-success fw-bold">New Recipes</h1>
        </div>
        <div class="row">
            {{-- cards index --}}
            <div class="col-lg-8 col-12">
                <div class="row d-flex flex-wrap">

                    {{-- Card --}}
                    <div class="col">
                        <div class="card bg-white d-flex flex-column col-12 col-sm-12 col-md-6 col-xl-4">

                            {{-- Card Header --}}
                            <div class="card-header">
                                <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="" class="w-100">
                            </div>

                            {{-- Card Body --}}
                            <div class="card-body">
                                <div class="row">

                                    {{-- Tag --}}
                                    <div class="col-10 col-sm-10 col-md-9">
                                        <span class="badge border border-success rounded-pill text-success">Vegan</span>
                                    </div>

                                    {{-- Bookmark --}}
                                    <div class="col-1">
                                        <span class="fa-layers">
                                            <i class="fa-regular fa-bookmark"></i><br>
                                            <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>

                                    {{-- Heart --}}
                                    <div class="col-1">
                                        <span class="fa-layers">
                                            <i class="fa-regular fa-heart"></i><br>
                                            <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>

                                </div>

                                {{-- Recipe Title --}}
                                <div class="row">
                                    <h3>Recipe Title</h3>
                                </div>

                                {{-- Recipe Over View --}}
                                <div class="row">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button type="button" class="btn btn-warning">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Ads index --}}
            <div class="col-12 col-lg-4 mt-5 mt-md-2">
                <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="" class="w-100">
            </div>
        </div>
        {{-- <div class="row">
            <h2 class="text-success fw-bold">New Recipes</h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="row d-flex flex-wrap">
                    <div class="col mt-3">
                            <div class="card bg-white d-flex flex-column h-100">
                                <div class="card-header">
                                    <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="Recipe1_image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8 col-md-8 col-lg-8">
                                            <span class="badge text-warning border rounded-pill border-warning">Vegan</span>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1"></div>
                                        <div class="col-sm-1 col-md-1 col-lg-1 text-center order-md-2 order-lg-2">
                                            <div class="row">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="row">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 col-md-1 col-lg-1 text-center order-md-2 order-lg-2">
                                            <div class="row">
                                                <i class="fa-regular fa-heart"></i>
                                            </div>
                                            <div class="row">
                                                <p>1</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h3>Recipe Title</h3>
                                    </div>
                                    <div class="row">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, tempora.</p>
                                    </div>
                                    <button class="btn btn-warning text-white">View Detail</button>
                                </div>
                            </div>
                        </div>

                </div>

                </div>

                <div class="col-4">
                    <div class="row">
                        <a href="">
                            <img src="{{ asset('assets/images/food_sample.jpg') }}" alt="Ad1" class="ad-image">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img src="{{ asset('assets/images/food_sample.jpg') }}" alt="Ad1" class="ad-image">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img src="{{ asset('assets/images/food_sample.jpg') }}" alt="Ad1" class="ad-image">
                        </a>
                    </div>
                    <div class="row">
                        <a href="">
                            <img src="{{ asset('assets/images/food_sample.jpg') }}" alt="Ad1" class="ad-image">
                        </a>
                    </div>
                </div>

            </div>
            <div class="text-end">
                <a href="" class="text-decoration-none text-success">See more...</a>
            </div>
        </div>

        </div> --}}
    </div>
</div>
@endsection


