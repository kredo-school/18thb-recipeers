@extends('layouts.app')

@section('content')
<div class="home-top text-center">
    <div class="card">
        <img src="{{ asset('/assets/images/home_top.jpeg') }}" alt="home top image" class="home-top-img">
        <div class="card-img-overlay d-flex">
            <div class="m-auto">
                <h1 class="text-success fw-bold display-1">Welcome to Recipeers!</h1>
                <p class="top-text h5">Recipe sharing platform for Vegans, Vegetarians and people with religious dietary restrictions.</p>
                <p class="text-success h5 mt-5">Start now for free!</p>
                <button type="submit" class="btn btn-lg btn-warning text-white w-25 shadow">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<div class="home pt-5">
    <div class="container">
        <div class="col">
            <h2 class="text-success fw-bold">New Recipes</h2>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="new_recipes">
                    <div class="row">
                        <div class="col mt-3">
                            <div class="card bg-white">
                                <div class="card-header">
                                    <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="Recipe1_image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <span class="badge text-warning border rounded-pill border-warning">Vegan</span>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-1 text-center d-none d-lg-block">
                                            <div class="row">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="row">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-1 text-center d-none d-lg-block">
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
                                        <p class="d-none d-lg-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, tempora.</p>
                                    </div>
                                    <button class="btn btn-warning text-white">View Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="card bg-white">
                                <div class="card-header">
                                    <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="Recipe1_image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <span class="badge text-warning border rounded-pill border-warning">Vegan</span>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-1 text-center d-none d-lg-block">
                                            <div class="row">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="row">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-1 text-center d-none d-lg-block">
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
                                        <p class="d-none d-lg-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, tempora.</p>
                                    </div>
                                    <button class="btn btn-warning text-white">View Detail</button>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-3">
                            <div class="card bg-white">
                                <div class="card-header">
                                    <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="Recipe1_image" class="card-img-top">
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <span class="badge text-warning border rounded-pill border-warning">Vegan</span>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-1 text-center d-none d-lg-block">
                                            <div class="row">
                                                <i class="fa-regular fa-bookmark"></i>
                                            </div>
                                            <div class="row">
                                                <p>1</p>
                                            </div>
                                        </div>
                                        <div class="col-1 text-center d-none d-lg-block">
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
                                        <p class="d-none d-lg-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, tempora.</p>
                                    </div>
                                    <button class="btn btn-warning text-white">View Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="text-end">
                <a href="" class="text-decoration-none text-success">See more...</a>
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
    </div>
</div>
@endsection
