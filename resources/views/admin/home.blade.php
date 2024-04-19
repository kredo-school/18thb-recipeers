@extends('layouts.app')

@section('title', 'Admin Home')

@section('content')

    <div class="container">
        <div class="row">
            <!-- admin menu -->
            <div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
                <div class="list-group">
                    <a href="{{ route('admin.home') }}" class="btn btn-main list-group-item mb-3">
                        Admin Home
                    </a>
                    <a href="{{ route('admin.users.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Users
                    </a>
                    <a href="{{ route('admin.recipes.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Recipes
                    </a>
                    <a href="{{ route('admin.inquiries.show') }}" class="btn btn-sub list-group-item mb-3">
                        All Inquiries
                    </a>
                    {{-- <a href="{{ route('admin.') }}" class="btn btn-sub list-group-item mb-3">
                        All Ads
                    </a> --}}
                </div>
            </div>

            <div class="col-lg-10 col-md-10 col-12 ps-3 my-5">
                {{-- Display total number --}}
                <div class="mb-5">
                    <h3 class="color1 h4 my-3">
                        <i class="fa-solid fa-person fs-3"></i>&nbsp;Total Numbers
                    </h3>

                    {{-- Number Contents --}}
                    <div class="d-flex justify-content-between">
                        {{-- Users count --}}
                        <div class="card input-color1 w-25 text-center rounded-0 py-3">
                            <div class="card-header bg-white border-0">
                                <span class="fs-2 fw-bold">{{ $userCount }}</span>&nbsp; Users
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-solid fa-people-group fa-3x color1"></i>
                            </div>
                        </div>

                        {{-- Recipes count --}}
                        <div class="card input-color1 w-25 text-center rounded-0 py-3">
                            <div class="card-header bg-white border-0">
                                <span class="fs-2 fw-bold">{{ $recipeCount }}</span>&nbsp; Recipes
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-solid fa-utensils fa-3x color1"></i>
                            </div>
                        </div>

                        {{-- Inquiries count --}}
                        <div class="card input-color1 w-25 text-center rounded-0 py-3">
                            <div class="card-header bg-white border-0">
                                <span class="fs-2 fw-bold">{{ $inquiryCount }}</span>&nbsp; Inquiries
                            </div>
                            <div class="card-body p-0 mb-2">
                                <i class="fa-regular fa-envelope fa-3x color1"></i>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Sales and Map --}}
                <div class="row g-5">
                    {{-- Sales --}}
                    <div class="col">
                        <h3 class="color1 h4 my-3">
                            <i class="fa-solid fa-chart-line fs-3"></i>&nbsp;Sales
                        </h3>
                        <div class="img my-2">
                            <img src="{{ asset('/assets/images/Sales_Graph.jpg') }}" alt="Sales Image" class="img-fluid">
                        </div>
                    </div>
                    {{-- Map --}}
                    <div class="col">
                        <h3 class="color1 h4 my-3">
                            <i class="fa-solid fa-map fs-3"></i>&nbsp;Map
                        </h3>
                        <div class="img my-2">
                            <img src="{{ asset('/assets/images/World_Map.png') }}" alt="world map" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
