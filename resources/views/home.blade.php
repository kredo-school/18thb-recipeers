@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home-top text-center">
        <div class="card">
            <img src="{{ asset('/assets/images/home_top.jpeg') }}" alt="home top image" class="home-top-img">
            <div class="card-img-overlay d-flex">
                <div class="m-auto">
                    <h1 class="Welcome-text color1 fw-bold display-1">Welcome to Recipeers!</h1>
                    <p class="top-text mt-4 h5 fw-light">Recipe sharing platform for Vegans, Vegetarians and people with religious dietary
                        restrictions.</p>
                    <p class="color1 h5 mt-5">Start now for free!</p>
                    <a href="{{ route('register') }}" class="btn btn-lg btn-main w-25">Sign Up</a>
                </div>
            </div>
        </div>
    </div>

    <div class="home container p-5">

            <h2 class="color1 mb-4">New Recipes</h2>
            <div class="row">
                {{-- cards index --}}
                <div class="col-lg-8 col-12 mb-5">
                    <div class="row d-flex flex-wrap">

                        {{-- Card --}}
                        <div class="col col-12 col-sm-12 col-md-6 col-xl-4">
                            <div class="card d-flex flex-column mb-4 mb-4 p-2">

                                {{-- Card Header --}}
                                <div class="card-header bg-white mx-auto">
                                    <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="" class="img-card img-fluid">
                                </div>

                                {{-- Card Body --}}
                                <div class="card-body">
                                    <div class="row">

                                        {{-- Tag --}}
                                        <div class="col-auto">
                                            <span class="badge badge-pref border rounded-pill">Vegan</span>
                                        </div>

                                        <div class="col">
                                            <div class="row justify-content-end">
                                                {{-- Bookmark --}}
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
                                    <h4>Recipe Title</h4>

                                    {{-- Recipe Over View --}}
                                    <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>

                                    <button type="button" class="btn btn-main">View Details</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

        <div class="col-lg-4 col-md-4 col-12">
			<img src="{{ asset('/assets/images/ad1.jpg') }}" alt="ad1" class="w-100 img-fluid mb-3 ml-5">
			<img src="{{ asset('/assets/images/ad2.jpg') }}" alt="ad2" class="w-100 img-fluid mb-3 ml-5">
			<img src="{{ asset('/assets/images/ad3.jpg') }}" alt="ad3" class="w-100 img-fluid mb-3 ml-5 border">
			<img src="{{ asset('/assets/images/ad4.jpg') }}" alt="ad4" class="w-100 img-fluid mb-3 ml-5">
		</div>

            </div>
        </div>
    </div>

    <div class="box">
        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
        <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    </div>
@endsection
