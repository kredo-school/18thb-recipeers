@extends('layouts.app')

@section('title', 'Admin Home')

@section('content')

    <div class="container">
        <div class="row">
            <!-- admin menu -->
            <div class="col-2 my-5 pe-4">
                <div class="list-group">
                    <button class="btn btn-main list-group-item mb-3">
                        Admin Home
                    </button>
                    <button class="btn btn-sub list-group-item mb-3">
                        All Users
                    </button>
                    <button class="btn btn-sub list-group-item mb-3">
                        All Recipes
                    </button>
                    <button class="btn btn-sub list-group-item mb-3">
                        All Inquiries
                    </button>
                    <button class="btn btn-sub list-group-item mb-3">
                        All Ads
                    </button>
                </div>
            </div>

            <div class="col-10 my-5">
                {{-- Display total number --}}
                <div class="top_contents mb-5">
                    <h6 class="color1 h4">
                        <i class="fa-solid fa-person mx-2"></i>
                        Total number of ...
                    </h6>

                    {{-- Number Contents --}}
                    <div class="num-contents d-flex justify-content-between">
                        {{-- Users number --}}
                        <div class="card input-color1 w-25 text-center rounded-0 p-1 my-2 ms-4 py-3">
                            <div class="card-header bg-white border-0 p-0 mb-1">
                                <span class="fs-4 fw-bold">1111</span> Users
                            </div>
                            <div class="card-body p-0">
                                <i class="fa-solid fa-people-group fa-3x color1"></i>
                            </div>
                        </div>

                        {{-- Recipes number --}}
                        <div class="card input-color1 w-25 text-center rounded-0 p-1 my-2 ms-4 py-3">
                            <div class="card-header bg-white border-0 p-0 mb-1">
                                <span class="fs-4 fw-bold">1111</span> Recipes
                            </div>
                            <div class="card-body p-0">
                                <i class="fa-solid fa-utensils fa-3x color1"></i>
                            </div>
                        </div>

                        {{-- Inquiries number --}}
                        <div class="card input-color1 w-25 text-center rounded-0 p-1 my-2 ms-4 py-3">
                            <div class="card-header bg-white border-0 p-0 mb-1">
                                <span class="fs-4 fw-bold">1111</span> Inquiries
                            </div>
                            <div class="card-body p-0">
                                <i class="fa-regular fa-envelope fa-3x color1"></i>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- Sales and Map --}}
                <div class="row">

                    {{-- Sales --}}
                    <div class="col color1 h4">
                        <i class="fa-solid fa-chart-line mx-2"></i>
                        Sales
                        <div class="img ms-4 my-2">
                            <img src="{{ asset('/assets/images/Sales_Graph.jpg') }}" alt="Sales Image" class="img-fluid">
                        </div>
                    </div>

                    {{-- Map --}}
                    <div class="col color1 h4">
                        <i class="fa-solid fa-map mx-2"></i>
                        Map
                        <div class="img ms-4 my-2">
                            <img src="{{ asset('/assets/images/World_Map.png') }}" alt="world map" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
