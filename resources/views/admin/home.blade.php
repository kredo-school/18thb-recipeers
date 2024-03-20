@extends('layouts.app')

@section('title', 'Admin Home')

@section('content')

    <div class="container">
        <div class="row">
            <!-- admin menu -->
            <div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
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

            <div class="col-lg-10 col-md-10 col-12 my-5">
                <h6 class="color1">
                    Total number of ...
                </h6>
            </div>
        </div>
    </div>
@endsection
