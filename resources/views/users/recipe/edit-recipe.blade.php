@extends('layouts.app')

@section('title', 'Recipeers')

@section('content')
<div class="container w-75">
    <form action="" class="pt-5 pb-5" id="create_recipe">
        @csrf
        @method('PATCH')

        {{-- Input Top Input Form --}}
        <div class="top_form">
            <h2 class="mb-3 color1">Create Recipe</h2>

            {{-- Input Recipe Title --}}
            <div class="row">
                <input type="text" name="Recipe_name" id="Recipe_name" class="form-control w-100 input-color1" placeholder="Enter the recipe title." value="Sukiyaki">
            </div>

            <div class="row mt-3">

                {{-- Input Image --}}
                <div class="col-4 previews">
                    <p>Select recipe image</p>
                    <input type="file" onchange="imgPreView(event)" name="recipe_top_image" id="recipe_top_image">
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
                            <input type="number" name="pre_time" id="pre_time" placeholder="00" class="form-control form-control-sm input-color1" value="30">
                        </div>
                    </div>

                    {{-- Adding Category Tag --}}
                    <div class="row mt-3 align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Category:</h6>
                        </div>
                        <div id="tagContainer1" class="col-3 d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput1" class="form-control form-control-sm input-color1" value="Dessert">
                        </div>
                    </div>

                    {{-- Adding Preferences --}}
                    <div class="row mt-3 align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Preference:</h6>
                        </div>
                        <div id="tagContainer2" class="col-3 d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput2" class="form-control form-control-sm input-color1" value="Vegan">
                        </div>
                    </div>

                    {{-- Adding Meal Types --}}
                    <div class="row mt-3 align-items-end">
                        <div class="col"></div>
                        <div class="col-3 text-end">
                            <h6>Meal Type:</h6>
                        </div>
                        <div id="tagContainer3" class="col-3 d-flex flex-wrap ">
                            <input type="text" id="tagInput3" class="form-control form-control-sm input-color1" value="Morning">
                        </div>
                    </div>

                    {{-- Adding Occasion --}}
                    <div class="row mt-3 text-end align-items-end">
                        <div class="col"></div>
                        <div class="col-3">
                            <h6>Occasion:</h6>
                        </div>
                        <div id="tagContainer4" class="col-3 d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput4" class="form-control form-control-sm input-color1" value="Occasion">
                        </div>
                    </div>

                    {{-- Adding Summary --}}
                    <div class="row">
                        <div class="col">
                            <label for="recipe_summary" class="h6">Summary:</label>
                            <textarea type="text" name="recipe_summary" id="recipe_summary" class="form-control input-color1">This is Japanese food.</textarea>
                        </div>
                    </div>

                    {{-- Select Country of Origin --}}
                    <div class="row mt-3">
                        <div class="col">
                            <label for="country_select" class="h6">Country of Origin:</label>
                            <select name="country_select" id="country_select" class="form-select input-color1">
                                <option selected>Select Country of Origin</option>
                                <option value="1">USA</option>
                                <option value="2">Japan</option>
                                <option value="3">China</option>
                            </select>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        {{-- Ingredients middle Input form --}}
        <div class="middle_form" id="middle_form">
            <div class="row mt-5 mb-3">
                <h3 class="color1">Indigrents</h3>
            </div>

            {{-- Input Form --}}
            <div class="row">
                <div class="col-4">
                    <input type="text" name="ing_input1" id="ing_input0" placeholder="Ingredient" class="form-control input-color1" value="Beef">
                </div>
                <div class="col-4">
                    <input type="text" name="ammount_input" id="ammount_input0" placeholder="ammount" class="form-control input-color1" value="300g">
                </div>
            </div>

        </div>
        {{-- Add Form Button --}}
        <input type="button" value="Add Ingredient" class="btn btn-sub mt-3 w-25" onclick="addIndigForm()">

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
                    <input type="file" id="step_file">
                </div>
                <div class="col-8">
                    <textarea rows="5" id="step_text" class="form-control input-color1">First, Gather all of the ingredients.</textarea>
                </div>
            </div>

        </div>
        <input type="button" value="Add Steps" class="btn btn-sub mt-3 w-25" onclick="addStepsForm()">

        {{-- Save & Cancel Button --}}
        <div class="row justify-content-center mt-5">

            <div class="col"></div>

            {{-- Cancel Button --}}
            <div class="col-2 d-flex justify-content-between">
                <button class="btn btn-sub flex-grow-1">Cancel</button>
            </div>

            {{-- Edit Button --}}
            <div class="col-2 d-flex justify-content-between">
                <input type="submit" value="Edit" class="btn btn-main flex-grow-1">
            </div>

            <div class="col"></div>

            {{-- Delete Button --}}
            <div class="col-1">
                <button type="button" class="btn btn-trash" data-bs-toggle="modal" data-bs-target="#recipeTrashModal">
                    <i class="fas fa-trash"></i>
                </button>

                {{-- Import Modal --}}
                @include('modals.editRecipeDelete')
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

{{-- Create Tag js --}}
<script>
    // Category Tag Function js
    document.addEventListener("DOMContentLoaded", function() {
        const tagInput = document.getElementById("tagInput1");
        const tagContainer = document.getElementById("tagContainer1");

        // If push Enter
        tagInput.addEventListener("keypress", function(event) {
            if(event.key == "Enter") {
                event.preventDefault(); // Cancel to Enter Button
                const tagText = tagInput.value.trim();
                if(tagText !== "") {
                    createTag(tagText, tagContainer);
                    tagInput.value = "";
                }
            }
        });

        // Create Tag Function
        function createTag(tagText) {
            const tag = document.createElement("span");
            tag.classList.add("badge", "border", "input-color1", "rounded-pill", "color1", "m-1");
            tag.textContent = tagText;

            // Adding delete button
            const deleteButton = document.createElement("button");
            deleteButton.classList.add("btn", "btn-sm", "p-0", "ps-1");
            deleteButton.innerHTML = `<i class="fas fa-times"></i>`;
            deleteButton.addEventListener("click", function() {
                tag.remove();
            });

            // Adding Tag to Container
            tagContainer.appendChild(tag);
            tag.appendChild(deleteButton);

            tagInput.parentNode.insertBefore(tag, tagInput.nextSibling);
        }
    });

    // Preference Tag Function js
    document.addEventListener("DOMContentLoaded", function() {
        const tagInput = document.getElementById("tagInput2");
        const tagContainer = document.getElementById("tagContainer2");

        // If push Enter
        tagInput.addEventListener("keypress", function(event) {
            if(event.key == "Enter") {
                event.preventDefault(); // Cancel to Enter Button
                const tagText = tagInput.value.trim();
                if(tagText !== "") {
                    createTag(tagText, tagContainer);
                    tagInput.value = "";
                }
            }
        });

        // Create Tag Function
        function createTag(tagText) {
            const tag = document.createElement("span");
            tag.classList.add("badge", "border", "input-color1", "rounded-pill", "color1", "m-1");
            tag.textContent = tagText;

            // Adding delete button
            const deleteButton = document.createElement("button");
            deleteButton.classList.add("btn", "btn-sm", "p-0", "ps-1");
            deleteButton.innerHTML = `<i class="fas fa-times"></i>`;
            deleteButton.addEventListener("click", function() {
                tag.remove();
            });

            // Adding Tag to Container
            tagContainer.appendChild(tag);
            tag.appendChild(deleteButton);

            tagInput.parentNode.insertBefore(tag, tagInput.nextSibling);
        }
    });

    // Meal Type Tag Function js
    document.addEventListener("DOMContentLoaded", function() {
        const tagInput = document.getElementById("tagInput3");
        const tagContainer = document.getElementById("tagContainer3");

        // If push Enter
        tagInput.addEventListener("keypress", function(event) {
            if(event.key == "Enter") {
                event.preventDefault(); // Cancel to Enter Button
                const tagText = tagInput.value.trim();
                if(tagText !== "") {
                    createTag(tagText, tagContainer);
                    tagInput.value = "";
                }
            }
        });

        // Create Tag Function
        function createTag(tagText) {
            const tag = document.createElement("span");
            tag.classList.add("badge", "border", "input-color1", "rounded-pill", "color1", "m-1");
            tag.textContent = tagText;

            // Adding delete button
            const deleteButton = document.createElement("button");
            deleteButton.classList.add("btn", "btn-sm", "p-0", "ps-1");
            deleteButton.innerHTML = `<i class="fas fa-times"></i>`;
            deleteButton.addEventListener("click", function() {
                tag.remove();
            });

            // Adding Tag to Container
            tagContainer.appendChild(tag);
            tag.appendChild(deleteButton);

            tagInput.parentNode.insertBefore(tag, tagInput.nextSibling);
        }
    });

    // Occasion Tag Function js
    document.addEventListener("DOMContentLoaded", function() {
        const tagInput = document.getElementById("tagInput4");
        const tagContainer = document.getElementById("tagContainer4");

        // If push Enter
        tagInput.addEventListener("keypress", function(event) {
            if(event.key == "Enter") {
                event.preventDefault(); // Cancel to Enter Button
                const tagText = tagInput.value.trim();
                if(tagText !== "") {
                    createTag(tagText, tagContainer);
                    tagInput.value = "";
                }
            }
        });

        // Create Tag Function
        function createTag(tagText) {
            const tag = document.createElement("span");
            tag.classList.add("badge", "border", "input-color1", "rounded-pill", "color1", "m-1");
            tag.textContent = tagText;

            // Adding delete button
            const deleteButton = document.createElement("button");
            deleteButton.classList.add("btn", "btn-sm", "p-0", "ps-1");
            deleteButton.innerHTML = `<i class="fas fa-times"></i>`;
            deleteButton.addEventListener("click", function() {
                tag.remove();
            });

            // Adding Tag to Container
            tagContainer.appendChild(tag);
            tag.appendChild(deleteButton);

            tagInput.parentNode.insertBefore(tag, tagInput.nextSibling);
        }
    });
</script>

{{-- Add Ingredients Form Function --}}
<script>
    var i = 0;
    function addIndigForm() {
        var add_row = document.createElement('div');
        add_row.classList.add("row", "mt-2");

        var add_col1 = document.createElement('div');
        add_col1.classList.add("col-4");

        var add_col2 = document.createElement('div');
        add_col2.classList.add("col-4");

        // Create Leftside Input
        var input_data1 = document.createElement('input');
        input_data1.type = 'text';
        input_data1.id = 'ing_input' + i;
        input_data1.classList.add("form-control", "input-color1");
        input_data1.placeholder = "Ingredient";

        // Create Rightside Input
        var input_data2 = document.createElement('input');
        input_data2.type = 'text';
        input_data2.id = 'ammount_input' + i;
        input_data2.classList.add("form-control", "input-color1");
        input_data2.placeholder = "ammount";
        var parent = document.getElementById('middle_form');

        parent.appendChild(add_row);
        add_row.appendChild(add_col1);
        add_col1.appendChild(input_data1);
        add_row.appendChild(add_col2);
        add_col2.appendChild(input_data2);
        i++;
    }
</script>

{{-- Add Steps Form Function --}}
<script>
    var i = 2;
    function addStepsForm() {
        var add_row = document.createElement('div');
        add_row.classList.add("row", "mt-2");

        var add_row_step = document.createElement('div');
        add_row.classList.add("row", "mt-1");

        var step_num = document.createElement('h5');
        step_num.classList.add("color1");
        step_num.textContent = `Step ${i}`;

        var add_col1 = document.createElement('div');
        add_col1.classList.add("col-4");

        var add_col2 = document.createElement('div');
        add_col2.classList.add("col-8");

        var input_data1 = document.createElement('input');
        input_data1.type = 'file';
        input_data1.id = 'step_file' + i;
        var input_data2 = document.createElement('textarea');
        input_data2.id = 'step_text' + i;
        input_data2.rows = '5';
        input_data2.classList.add("form-control", "input-color1");
        var parent = document.getElementById('bottom_form');

        parent.appendChild(add_row_step);
        add_row_step.appendChild(step_num);
        parent.appendChild(add_row);
        add_row.appendChild(add_col1);
        add_col1.appendChild(input_data1);
        add_row.appendChild(add_col2);
        add_col2.appendChild(input_data2);
        i++;
    }
</script>
@endsection
