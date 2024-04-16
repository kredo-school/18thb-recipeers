@extends('layouts.app')

@section('title', 'Create Recipe')

@section('content')
<div class="container w-75">
    <form action="{{ route('recipe.store') }}" class="pt-5 pb-5" method="post" enctype="multipart/form-data" id="recipe_form" name="recipe_form">
        @csrf

        {{-- Input Top Input Form --}}
        <div class="top_form">
            <h2 class="mb-3 color1">Create Recipe</h2>

            {{-- Input Recipe Title --}}
            <div class="row">
                <input type="text" name="title" id="title" class="form-control w-100 input-color1" placeholder="Enter the recipe title.">
            </div>

            <div class="row mt-3">

                {{-- Input Image --}}
                <div class="col-4 previews">
                    <p>Select recipe image</p>
                    <input type="file" name="thumbnail" id="thumbnail" class="form-control" aria-describedby="image-info">
                </div>

                {{-- Recipe Input form --}}
                <div class="col-8 p-0">
                    {{-- Adding Preparation Time --}}
                    <div class="row align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Preparation Time[min]:</h6>
                        </div>
                        <div class="col-3">
                            <input type="number" name="prep_time" id="prep_time" placeholder="00" class="form-control form-control-sm input-color1">
                        </div>
                    </div>

                    {{-- Adding Category Tag --}}
                    <div class="row mt-3 align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Category:</h6>
                        </div>
                        <div id="tagContainer1" class="col-3 d-flex flex-wrap align-item-center">
                            <input type="text" name="category" id="category" class="form-control form-control-sm input-color1">
                        </div>
                    </div>

                    {{-- Adding Preferences --}}
                    <div class="row mt-3 align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Preference:</h6>
                        </div>
                        <div id="tagContainer2" class="col-3 d-flex flex-wrap align-item-center">
                            <input type="text" id="eat_pref" name="eat_pref" class="form-control form-control-sm input-color1">
                        </div>
                    </div>

                    {{-- Adding Summary --}}
                    <div class="row">
                        <div class="col">
                            <label for="recipe_summary" class="h6">Summary:</label>
                            <textarea type="text" name="summary" id="summary" class="form-control input-color1"></textarea>
                        </div>
                    </div>

                    {{-- Select Country of Origin --}}
                    <div class="row mt-3">
                        <div class="col">
                            <label for="country_select" class="h6">Country of Origin:</label>
                            <select name="country" id="country" class="form-select input-color1">
                                <option selected>Select Country of Origin</option>
                                <option value="1">USA</option>
                                <option value="1">Japan</option>
                                <option value="1">China</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Ingredients middle Input form --}}
        <div class="middle_form" id="add_ing_form">
            <div class="row mt-5 mb-3">
                <h3 class="color1">Indigrents</h3>
            </div>

            {{-- Input Form --}}
            <div class="row mb-2">
                <div class="col-4">
                    <input type="text" name="ing_input0" id="ing_input0" placeholder="Ingredient" class="form-control input-color1">
                </div>
                <div class="col-4">
                    <input type="text" name="amount_input0" id="amount_input0" placeholder="amount" class="form-control input-color1">
                </div>
            </div>

        </div>
        {{-- Add Ingredient Form Button --}}
        <input type="button" id="add_ing_btn" value="Add Ingredient" class="btn btn-sub mt-3 w-25">

        {{-- Input Steps Form --}}
        <div class="bottom_form mt-3" id="bottom_form">
            <div class="row mt-5 mb-3">
                <h3 class="color1">Steps</h3>
            </div>

            {{-- Step1 Input Form --}}
            <div class="row">
                <h5 class="color1">Step1</h5>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="file" id="step_file0">
                </div>
                <div class="col-8">
                    <textarea rows="5" id="step_text0" class="form-control input-color1"></textarea>
                </div>
            </div>

        </div>
        <input type="button" value="Add Steps" id="Add_step0" class="btn btn-sub mt-3 w-25">

        {{-- Save & Cancel Button --}}
        <div class="row justify-content-center mt-5">
            <div class="col-2 d-flex justify-content-between">
                <button class="btn btn-sub flex-grow-1">Cancel</button>
            </div>
            <div class="col-2 d-flex justify-content-between">
                <button type="submit" id="recipe_save" name="recipe_save" class="btn btn-main flex-grow-1">Save</button>
            </div>
        </div>

    </form>
</div>

{{-- Bottom Image --}}
<div class="box">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
    <img src="{{ asset('assets/images/footer.jpg') }}" alt="footer-banner">
</div>

@endsection
