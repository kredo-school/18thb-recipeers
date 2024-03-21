@extends('layouts.app')

@section('title', 'Bookmarks')

@section('content')
<div class="container py-5 justify-content-center">
    <div class="row">
        <div class="col-auto mx-2">
            <div class="list-group">
                <button class="btn btn-sub list-group-item mb-3">
                    Bookmarked Recipes
                </button>
                <button class="btn btn-main list-group-item mb-3">
                    Liked Recipes
                </button>
            </div>
        </div>
        {{-- CARDS INDEX --}}
        <div class="col">
            <h3 class="color1 mb-4">Liked Recipes</h2>
            <div class="row">

                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
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
                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
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
                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
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
                            <h4>Recipe Title</h4>
                            {{-- Recipe Over View --}}
                            <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            <button type="button" class="btn btn-main">View Details</button>
                        </div>
                    </div>
                </div>
                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
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
                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
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
                {{-- CARD --}}
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card d-flex flex-column mb-4 p-2">
                        {{-- card header --}}
                        <div class="card-header bg-white mx-auto" style="border-bottom: none;">
                            <img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
                        </div>
                        {{-- card body --}}
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
@endsection