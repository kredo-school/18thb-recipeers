@extends('layouts.app')

@section('title', "Profile Detail") {{-- $user->username --}}

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row px-5 me-2">

                <!-- Avatar -->
                <div class="col-auto">
                    @if($user->avatar)
                        <img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle img-lg mb-3">
                    @else
                        <i class="fa-solid fa-circle-user icon-lg color1 mb-3"></i>
                    @endif
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col">
                            @if($user->eating_pref_id)
                                <span class="badge badge-pref border rounded-pill">{{ $user->eating_pref_id->name }}</span>
                            @else
                                <br>
                            @endif
                        </div>
                        <div class="col" class="text-align-right">
                            <form action="{{ route('profile.edit', $user->id )}}", method="post">
                                @csrf
                                <button type="submit" class="btn btn-main px-5">Edit</button>
                            </form>
                        </div>
                    </div>
                    <p>{{ $user->username }}</p>
                    <p>{{ $user->introduction }}</p>
                    <p>
                        <a href="{{ route('recipe.show', $user->recipes->id )}}" class="text-decoration-none text-dark">
                            <span class="me-2">{{ $user->recipes->count() }}</span> {{ $user->recipes->count() ==1 ? 'recipe' : 'recipes' }}
                        </a>

                        <span class="mx-2">17 followers</span>
                        {{-- * remove comment out below if Follow functions are being implemented. --}}
                        {{-- <a href="{{ route('profile.followers', $user->id) }}" class="text-decoration-none text-dark">
                            <span class="mx-2">{{ $user->followers->count() }}</span> {{ $user->followers->count() ==1 ? 'Follower' : 'Followers' }}
                        </a> --}}

                        <span class="mx-2">9 followings</span>
                        {{-- * remove comment out below if Follow functions are being implemented. --}}
                        {{-- <a href="{{ route('profile.following', $user->id) }}" class="text-decoration-none text-dark">
                            <span class="mx-2">{{ $user->follows->count() }}</span> Following
                        </a> --}}

                    </p>
                </div>

                {{-- If this is a business account, show below --}}
                <!-- Business Info -->
                <div class="col-lg-4 col-md-4 col-12 ms-4 business-info-box">
                    <h4 class="mt-1">Business Info</h4>
                    <h6>
                        Website
                        <a href="{{ $user->business_info->hp_url }}" class="url-display">{{ $user->business_info->hp_url }}</a>
                    </h6>
                    <h6 class="mb-3">
                        Order delivery
                        <a href="{{ $user->business_info->delivery_url }}" class="url-display">{{ $user->business_info->delivery_url }}</a>
                    </h6>
                    <div>
                        {{-- below icons are temporary. No links --}}
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

                {{-- loop of recipe cards --}}
                @forelse ( $recipes->chunk(3) as $chunk )

                    <!-- card -->

                    {{-- @if($recipe->count() > 0 || $recipe->count() < 4) --}}  {{-- 下記$chunkでカバー --}}

                    <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        @forelse ($chunk as $recipe)
                            <div class="recipe">
                                <div class="card d-flex flex-column mb-4 p-2">
                                    {{-- card header --}}
                                    <div class="card-header bg-white mx-auto border-bottom-none">
                                        <img src="{{ $recipe->thumbnail }}" alt="card-pic" class="img-card img-fluid">
                                        {{-- {{ asset('/assets/images/food.jpg') }} --}}
                                    </div>
                                    {{-- card body --}}
                                    <div class="card-body">
                                        <div class="row">
                                            {{-- Tag --}}
                                            <div class="col-auto">
                                                <span class="badge badge-pref border rounded-pill">{{ $recipe->eating_pref_id->name }}</span>
                                                {{-- Vegan --}}
                                            </div>
                                            {{-- Bookmark --}}
                                            <div class="col">
                                                <div class="row justify-content-end">
                                                    <div class="col-auto">
                                                        <div class="fa-layers d-flex flex-column align-items-center">
                                                            <i class="fa-regular fa-bookmark"></i>
                                                            <span class="fa-layers-counter">{{ $recipe->bookmarks->count() }}</span>
                                                        </div>
                                                    </div>
                                                    {{-- Heart --}}
                                                    <div class="col-auto">
                                                        <div class="fa-layers d-flex flex-column align-items-center">
                                                            <i class="fa-regular fa-heart"></i>
                                                            <span class="fa-layers-counter">{{ $recipe->likes->count() }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Recipe Title --}}
                                        <div class="row">
                                            <h4>{{ $recipe->title }}</h4>
                                        </div>
                                        {{-- Recipe Over View --}}
                                        <div class="row">
                                            <p class="small">{{ $recipe->summary }}</p>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <form action="{{ route('recipe.show', $recipe->id )}}", method="post">
                                                    @csrf
                                                    <button type="submit" class="btn btn-main">View Details</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>   {{-- end of a recipe card--}}



                    {{-- card --}}  {{-- 2nd recipe --}}
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
                    </div>  {{-- end of the 2nd recipe --}}

                    {{-- card --}}  {{-- 3rd recipe --}}
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
                    </div>  {{--end of the 3rd recipe--}}



                @empty
                {{-- no recipes --}}
                <div class="text-center">
                    <h2>Share recipes</h2>
                    <p class="text-muted">When you share recipes, they appear on your profile.</p>
                    <a href="{{ route('create') }}" class="text-decoration-none">Share your first recipe.</a>
                </div>

                @endforelse

            </div>
        </div>
    </div>  {{-- End of recipes --}}




    
    {{-- pagenation here --}}

</div>  {{-- end of container --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection
