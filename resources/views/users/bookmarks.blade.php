@extends('layouts.app')

@section('title', 'Bookmarks')

@section('content')
<div class="container py-5 justify-content-center">
    <div class="row">
        <div class="col-auto mx-2 justify-content-center">
            <div class="list-group">
                <button class="btn btn-main list-group-item mb-3">
                    Bookmarked Recipes
                </button>
                <button class="btn btn-sub list-group-item mb-3">
                    Liked Recipes
                </button>
            </div>
        </div>
        <div class="col">
            {{-- CARDS INDEX --}}
            <div class="col-lg-8 col-md-8 col-12">
                <div class="row">

                    {{-- CARD --}}
                    <div class="col-4 col-lg-4 col-md-4 col-12">
                        <div class="card d-flex flex-column mb-4">
                            {{-- card header --}}
                            <div class="card-header bg-white mx-auto">
                                <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                            </div>
                            {{-- card body --}}
                            <div class="card-body">
                                <div class="row">
                                    {{-- Tag --}}
                                    <div class="col-10 col-sm-10 col-md-9">
                                        <span class="badge badge-pref border rounded-pill">Vegan</span>
                                    </div>
                                    {{-- Bookmark --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-bookmark"></i>
                                        <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>
                                    {{-- Heart --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-heart"></i>
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
                                        <button type="button" class="btn btn-main">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CARD --}}
                    <div class="col-4 col-lg-4 col-md-4 col-12">
                        <div class="card d-flex flex-column mb-4">
                            {{-- card header --}}
                            <div class="card-header bg-white mx-auto">
                                <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                            </div>
                            {{-- card body --}}
                            <div class="card-body">
                                <div class="row">
                                    {{-- Tag --}}
                                    <div class="col-10 col-sm-10 col-md-9">
                                        <span class="badge badge-pref border rounded-pill">Vegan</span>
                                    </div>
                                    {{-- Bookmark --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-bookmark"></i>
                                        <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>
                                    {{-- Heart --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-heart"></i>
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
                                        <button type="button" class="btn btn-main">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CARD --}}
                    <div class="col-4 col-lg-4 col-md-4 col-12">
                        <div class="card d-flex flex-column mb-4">
                            {{-- card header --}}
                            <div class="card-header bg-white mx-auto">
                                <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                            </div>
                            {{-- card body --}}
                            <div class="card-body">
                                <div class="row">
                                    {{-- Tag --}}
                                    <div class="col-10 col-sm-10 col-md-9">
                                        <span class="badge badge-pref border rounded-pill">Vegan</span>
                                    </div>
                                    {{-- Bookmark --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-bookmark"></i>
                                        <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>
                                    {{-- Heart --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-heart"></i>
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
                                        <button type="button" class="btn btn-main">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CARD --}}
                    <div class="col-4 col-lg-4 col-md-4 col-12">
                        <div class="card d-flex flex-column mb-4">
                            {{-- card header --}}
                            <div class="card-header bg-white mx-auto">
                                <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                            </div>
                            {{-- card body --}}
                            <div class="card-body">
                                <div class="row">
                                    {{-- Tag --}}
                                    <div class="col-10 col-sm-10 col-md-9">
                                        <span class="badge badge-pref border rounded-pill">Vegan</span>
                                    </div>
                                    {{-- Bookmark --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-bookmark"></i>
                                        <span class="fa-layers-counter">1</span>
                                        </span>
                                    </div>
                                    {{-- Heart --}}
                                    <div class="col-1 text-center">
                                        <span class="fa-layers d-flex flex-column align-items-center">
                                        <i class="fa-regular fa-heart"></i>
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
                                        <button type="button" class="btn btn-main">View Details</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection