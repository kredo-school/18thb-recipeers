@extends('layouts.app')

@section('title', "Profile Detail")

@section('content')

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row me-2">

                <div class="col-auto">
                    {{-- Avatar --}}
                    <div class="row">
                        @if($user->avatar)
                            <img src="{{ $user->avatar }}" alt="avatar" class="rounded-circle img-lg mb-3">
                        @else
                            <i class="fa-solid fa-circle-user icon-lg color1 mb-3"></i>
                        @endif
                    </div>
                    {{-- SNS icons --}}
                    <div class="row justify-content-start">  {{-- below icons are temporary. No links for now --}}
                        <div class="col-auto mx-auto">
                            <i class="fa-brands fa-x-twitter x-twitter-color fa-lg sns-icon me-1"></i>
                            <i class="fa-brands fa-instagram instagram-color fa-lg sns-icon mx-1"></i>
                            <i class="fa-brands fa-facebook facebook-color fa-lg sns-icon mx-1"></i>
                            <i class="fa-brands fa-tiktok tiktok-color fa-lg sns-icon ms-1"></i>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex align-items-center mb-2">
                        {{-- eating preference --}}
                        <div class="col">
                            @if($user->eating_pref_id)
                                <span class="badge badge-pref border rounded-pill">{{ $user->eating_pref_id->name }}</span>
                            @endif
                        </div>
                        {{-- edit button --}}
                        <div class="col d-flex justify-content-end">
                            <form action="{{ route('profile.edit', $user->id )}}"
                                 method="get">
                                @csrf
                                <button type="submit" class="btn btn-main px-5">Edit</button>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-2">
                        <h4 class="me-2">
                            {{-- user name/business name --}}
                            @if(optional($user->business_info)->exists())
                                {{ $user->business_info->name }}
                            @else
                                {{ $user->username }}
                            @endif

                            {{-- icons for business --}}
                            @if(optional($user->business_info)->exists())
                                @if($user->business_info->hp_url)
                                    <a href="{{ $user->business_info->hp_url }}">
                                        <i class="fa-solid fa-globe fa-sm business-icon align-self-center mx-2"></i>
                                    </a>
                                @endif
                                @if($user->business_info->delivery_url)
                                    <a href="{{ $user->business_info->delivery_url }}">
                                        <i class="fa-solid fa-truck fa-sm business-icon align-self-center"></i>
                                    </a>
                                @endif
                            @endif
                        </h4>
                    </div>

                    {{-- Location for business users --}}
                    @if(optional($user->business_info)->exists())
                        @if($user->business_info->location)
                            <p class="my-2">{{ $user->business_info->location }}</p>
                        @endif
                    @endif

                    {{-- introduction --}}
                    @if ($user->introduction)
                        <p class="my-3">{{ $user->introduction }}</p>
                    @endif

                    {{-- Nos. of recipes/followers/following --}}
                    <p class="my-3">
                        @if($user->recipes !== null && $user->recipes->count() > 0)
                            <span class="me-2">{{ $user->recipes->count() }}</span> {{ $user->recipes->count() ==1 ? 'recipe' : 'recipes' }}
                        @else
                            <span class="me-2"><span class="h5">0</span> recipe</span>
                        @endif

                        <span class="mx-2"><span class="h5">17</span> followers</span>
                        {{-- * remove comment out below if Follow functions are being implemented. --}}
                        {{-- <a href="{{ route('profile.followers', $user->id) }}" class="text-decoration-none text-dark">
                            <span class="mx-2">{{ $user->followers->count() }}</span> {{ $user->followers->count() ==1 ? 'Follower' : 'Followers' }}
                        </a> --}}

                        <span class="mx-2"><span class="h5">9</span> followings</span>
                        {{-- * remove comment out below if Follow functions are being implemented. --}}
                        {{-- <a href="{{ route('profile.following', $user->id) }}" class="text-decoration-none text-dark">
                            <span class="mx-2">{{ $user->follows->count() }}</span> Following
                        </a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row ms-5">
        <div class="col-lg-10 col-md-10 col-12">
            <div class="row">
                <h4 class="color1 ms-5 my-5">Posted Recipes</h4>
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

    {{-- the user's all recipes --}}
    <div class="row justify-content-center mb-5">
        <!-- card index -->
        <div class="col-lg-10 col-md-10 col-12">

            @php $counter = 0 @endphp

            {{-- loop of recipe cards --}}
            @forelse ($recipes as $recipe)

                @if ($counter % 3 == 0)
                    <div class="row px-5">
                @endif

                    <!-- 1st card -->
                    <div class="col-4 col-lg-4 col-md-4 col-sm-12 col-12">
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
                                            <form action="{{ route('recipe.show', $recipe->id )}}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-main">View Details</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @php $counter++ @endphp

                @if ($counter % 3 == 0 || $loop->last)
                    </div>
                @endif

            @empty
                {{-- no recipes --}}
                <div class="text-center">
                    <p class="text-muted">No recipes found.</p>
                    {{-- <h2>Share recipes</h2>
                    <p class="text-muted">When you share recipes, they appear on your profile.</p>
                    <a href="{{ route('create') }}" class="text-decoration-none">Share your first recipe.</a> --}}
                </div>

            @endforelse
        </div>   {{-- end of the loop of recipes posted. --}}


                    {{-- When some resipes are posted by the user, remove below 3 recipes (since these are just examples). --}}


                    {{-- card --}}  {{-- 1st recipe --}}
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
                    </div>  {{-- end of the 1st recipe --}}


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


        {{ $recipes->links() }}  {{-- pagination --}}

    </div>  {{-- End of recipes --}}

</div>  {{-- end of container --}}

{{--
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

@endsection
