@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" class="pt-5">
        <div class="row">
            <input type="text" name="Recipe_name" id="Recipe_name" class="form-control w-100" placeholder="Enter the recipe title.">
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <img src="{{ asset('/assets/images/food_sample.jpg') }}" alt="Recipe Image" class="w-100">
            </div>

            {{-- Recipe Input form --}}
            <div class="col">
                {{-- Adding Preparation Time --}}
                <div class="row">
                    <div class="col-6">
                        <h6>Preparation Time</h6>
                    </div>
                    <div class="col-3">
                        <input type="number" name="pre_time" id="pre_time" placeholder="00" class="form-control form-control-sm">
                    </div>
                    <div class="col-3">
                        <p>min</p>
                    </div>
                </div>

                {{-- Adding Category Tag --}}
                <div class="row">
                    <div class="col-6">
                        <h6>Category</h6>
                    </div>
                    <div class="col">
                        <span class="badge border border-success rounded-pill text-success me-2">Cate1</span>
                        <span class="badge border border-success rounded-pill text-success me-2">Cate1</span>
                        <button class="badge border border-success rounded-circle text-success me-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

                {{-- Adding Preferences --}}
                <div class="row">
                    <div class="col-6">
                        <h6>Preference</h6>
                    </div>
                    <div class="col">
                        <span class="badge border border-success rounded-pill text-success me-2">Pre1</span>
                        <span class="badge border border-success rounded-pill text-success me-2">Pre1</span>
                        <button class="badge border border-success rounded-circle text-success me-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

                {{-- Adding Meal Types --}}
                <div class="row">
                    <div class="col-6">
                        <h6>Meal Type</h6>
                    </div>
                    <div class="col">
                        <span class="badge border border-success rounded-pill text-success me-2">Meal1</span>
                        <span class="badge border border-success rounded-pill text-success me-2">Meal2</span>
                        <button class="badge border border-success rounded-circle text-success me-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

                {{-- Adding Meal Types --}}
                <div class="row">
                    <div class="col-6">
                        <h6>Occasion</h6>
                    </div>
                    <div class="col">
                        <span class="badge border border-success rounded-pill text-success me-2">Occa1</span>
                        <span class="badge border border-success rounded-pill text-success me-2">Occa2</span>
                        <button class="badge border border-success rounded-circle text-success me-2"><i class="fa-solid fa-plus"></i></button>
                    </div>
                </div>

                {{-- Adding Summary --}}
                <div class="row">
                    <label for="recipe_summary" class="h6">Summary</label>
                    <textarea type="text" name="recipe_summary" id="recipe_summary" class="form-control"></textarea>
                </div>

                {{-- Select Country of Origin --}}
                <div class="row mt-3">
                    <label for="country_select" class="h6">Country of Origin</label>
                    <select name="country_select" id="country_select" class="form-select">
                        <option selected>Select Country of Origin</option>
                        <option value="1">USA</option>
                        <option value="1">Japan</option>
                        <option value="1">China</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
