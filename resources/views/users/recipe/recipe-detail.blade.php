@extends('layouts.app')

{{-- * change title to variable --}}
@section('title', "Recipe Title")

@section('content')
<div class="container p-5 justify-content-center">
    <div class="row mb-4">
        <div class="col">
            <div class="row">
                <div class="col-auto me-3">
                    {{-- * Change to variable --}}
                    <h2 class="color1">Spring Salad Bowl</h2>
                </div>
                <div class="col-auto text-center mt-2">
                    {{-- * if the user has already bookmarked this recipe --}}
                    <i class="fa-regular fa-bookmark color5 icon-sm"></i> 9
                    {{-- @else --}}
                    {{-- <i class="fa-solid fa-bookmark color5 icon-sm"></i> 9 --}}
                </div>
                <div class="col-auto text-center mt-2">
                    {{-- * if the user has already liked this recipe --}}
                    {{-- <i class="fa-regular fa-heart color5 icon-sm"></i> 15 --}}
                    {{-- @else --}}
                    <i class="fa-solid fa-heart color5 icon-sm"></i> 15
                </div>
            </div>
        </div>
        <div class="col-2 text-end">
            <button class="btn btn-main w-50">Edit</button>
        </div>
    </div>
    {{-- RECIPE INFO --}}
    <div class="row">
        <div class="col-4 me-5">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample recipe" class="img-cover ">
        </div>
        <!-- * change each detail to variable -->
        <div class="col">
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Preparation Time</p>
                </div>
                <div class="col">
                    <p>20 min.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Category</p>
                </div>
                <div class="col">
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Salad</button>
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Gluten Free</button>
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Low Calorie</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Preferences</p>
                </div>
                <div class="col">
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Vegan</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Meal Type</p>
                </div>
                <div class="col">
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Lunch</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Occasion</p>
                </div>
                <div class="col">
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Easter</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Summary</p>
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores hic earum eius saepe, totam velit accusamus reprehenderit esse dolorem ipsam quaerat aperiam et minima perspiciatis doloribus ullam voluptate iste mollitia.</p>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-3">
                    <p class="h6">Country of Origin</p>
                </div>
                <div class="col">
                    <button class="btn btn-sm btn-outline-success rounded-pill me-1">Canada</button>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
    {{-- INGREDIENTS --}}
    <div class="mt-5">
        <h3 class="mb-4 color1">Ingredients</h3>
        <div class="row">
            <div class="col-5">
                <div class="row mb-2">
                    <div class="col-6">
                        <p class="h5">Ingredient</p>
                    </div>
                    <div class="col">
                        <p class="h5">Amount</p>
                    </div>
                </div>
                {{-- @foreach --}}
                <div class="row">
                    <div class="col-6">
                        <p>spinach</p>
                    </div>
                    <div class="col">
                        <p>1 package</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>onion</p>
                    </div>
                    <div class="col">
                        <p>1/2</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>radishes</p>
                    </div>
                    <div class="col">
                        <p>3/4 cup</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>carrot</p>
                    </div>
                    <div class="col">
                        <p>1/2</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>DRESSING</p>
                    </div>
                    <div class="col">
                        <p></p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>vegetable oil</p>
                    </div>
                    <div class="col">
                        <p>1/2 cup</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>cider vinegar</p>
                    </div>
                    <div class="col">
                        <p>2 tablespoons</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>honey</p>
                    </div>
                    <div class="col">
                        <p>2 tablespoons</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>black pepper</p>
                    </div>
                    <div class="col">
                        <p>1/2 teaspoons</p>
                    </div>
                    <hr class="color2">
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>salt</p>
                    </div>
                    <div class="col">
                        <p>1/4 teaspoons</p>
                    </div>
                    <hr class="color2">
                </div>

            </div>
        </div>
    </div>
    {{-- STEPS --}}
    <h3 class="mt-5 color1">Steps</h3>
    {{-- @foreach --}}
    <p class="h5 my-3">Step 1</p>
    <div class="row mb-5">
        <div class="col-4">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample step1" class="img-step">
        </div>
        <div class="col">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
        </div>
    </div>
    <p class="h5 my-3">Step 2</p>
    <div class="row mb-5">
        <div class="col-4">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample step2" class="img-step">
        </div>
        <div class="col">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
        </div>
    </div>
    <p class="h5 my-3">Step 3</p>
    <div class="row mb-5">
        <div class="col-4">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample step3" class="img-step">
        </div>
        <div class="col">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
        </div>
    </div>
    <p class="h5 my-3">Step 4</p>
    <div class="row mb-5">
        <div class="col-4">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample step4" class="img-step">
        </div>
        <div class="col">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
        </div>
    </div>
    <p class="h5 my-3">Step 5</p>
    <div class="row mb-5">
        <div class="col-4">
            <img src="{{ asset('assets/images/sample_recipe.jpg') }}" alt="sample step5" class="img-step">
        </div>
        <div class="col">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
        </div>
    </div>
    {{-- COMMENTS --}}
    <h3 class="mt-5 mb-4 color1">Comments</h3>
    <div class="card bg-white px-5">
            <div class="input-group py-4">
                {{-- * add form elements and variables --}}
                <textarea name="comment" id="comment" rows="1" class="form-control form-control" placeholder="Add a comment..."></textarea>
                <button class="btn btn-main btn-sm px-4">Post</button>
            </div>
        <div class="card-body">
            {{-- @foreach --}}
            <div class="row align-items-center">
                <div class="col-auto mb-2">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="avatar" class="img-sm rounded-circle">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                </div>
                <div class="col-2 text-end">
                    <p class="small fw-lighter">2024/03/13 20:01:43
                        {{-- * change to button --}}
                        <i class="fa-solid fa-trash-can text-secondary ms-2"></i>
                    </p>
                </div>
                <hr>
            </div>
            <div class="row align-items-center">
                <div class="col-auto mb-2">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="avatar" class="img-sm rounded-circle">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                </div>
                <div class="col-2 text-end items-align">
                    <p class="small fw-lighter">2024/03/13 20:11:23
                        {{-- * change to button --}}
                        <i class="fa-solid fa-trash-can text-secondary ms-2"></i>
                    </p>
                </div>
                <hr>
            </div>
            <div class="row align-items-center">
                <div class="col-auto mb-2">
                    <img src="{{ asset('assets/images/user.jpg') }}" alt="avatar" class="img-sm rounded-circle">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                </div>
                <div class="col-2 text-end">
                    <p class="small fw-lighter">2024/03/13 21:07:32
                        {{-- * change to button --}}
                        <i class="fa-solid fa-trash-can text-secondary ms-2"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection