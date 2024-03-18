@extends('layouts.app')

@section('content')
<div class="container">
    <form action="" class="pt-5 pb-5">
        <div class="top_form">
            <div class="row">
                <input type="text" name="Recipe_name" id="Recipe_name" class="form-control w-100" placeholder="Enter the recipe title.">
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <p>Select recipe image</p>
                    <input type="file" name="recipe_top_image" id="recipe_top_image">
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
                    <div class="row mt-1">
                        <div class="col-6">
                            <h6>Category</h6>
                        </div>
                        <div id="tagContainer1" class="col d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput1" class="form-control form-control-sm border-success">
                        </div>
                    </div>

                    {{-- Adding Preferences --}}
                    <div class="row mt-2">
                        <div class="col-6">
                            <h6>Preference</h6>
                        </div>
                        <div id="tagContainer2" class="col d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput2" class="form-control form-control-sm border-success">
                        </div>
                    </div>

                    {{-- Adding Meal Types --}}
                    <div class="row mt-2">
                        <div class="col-6">
                            <h6>Meal Type</h6>
                        </div>
                        <div id="tagContainer3" class="col d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput3" class="form-control form-control-sm border-success">
                        </div>
                    </div>

                    {{-- Adding Occasion --}}
                    <div class="row mt-2">
                        <div class="col-6">
                            <h6>Occasion</h6>
                        </div>
                        <div id="tagContainer4" class="col d-flex flex-wrap align-item-center">
                            <input type="text" id="tagInput4" class="form-control form-control-sm border-success">
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
        </div>

        {{-- Ingredients middle Input form --}}
        <div class="middle_form" id="middle_form">
            <div class="row mt-3">
                <h3 class="text-success">Indigrents</h3>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="text" name="ing_input1" id="ing_input0" placeholder="Ingredient" class="form-control">
                </div>
                <div class="col-4">
                    <input type="text" name="ammount_input" id="ammount_input0" placeholder="ammount" class="form-control">
                </div>
            </div>
        </div>
        {{-- Add Form Button --}}
        <input type="button" value="Add Ingredient" class="btn btn-outline-success mt-3 w-25" onclick="addIndigForm()">

        <div class="bottom_form mt-3" id="bottom_form">
            <div class="row">
                <h3 class="text-success">Steps</h3>
            </div>
            <div class="row">
                <h5 class="text-success">Step1</h5>
            </div>
            <div class="row">
                <div class="col-4">
                    <input type="file" id="step_file">
                </div>
                <div class="col-8">
                    <textarea rows="8" id="step_text" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <input type="button" value="Add Steps" class="btn btn-outline-success mt-3 w-25" onclick="addStepsForm()">
    </form>
</div>

<div class="box">
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
            tag.classList.add("badge", "border", "border-success", "rounded-pill", "text-success", "m-1");
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
            tag.classList.add("badge", "border", "border-success", "rounded-pill", "text-success", "m-1");
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
            tag.classList.add("badge", "border", "border-success", "rounded-pill", "text-success", "m-1");
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
            tag.classList.add("badge", "border", "border-success", "rounded-pill", "text-success", "m-1");
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
        input_data1.classList.add("form-control");
        input_data1.placeholder = "Ingredient";

        // Create Rightside Input
        var input_data2 = document.createElement('input');
        input_data2.type = 'text';
        input_data2.id = 'ammount_input' + i;
        input_data2.classList.add("form-control");
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
        step_num.classList.add("text-success");
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
        input_data2.rows = '8';
        input_data2.classList.add("form-control");
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
