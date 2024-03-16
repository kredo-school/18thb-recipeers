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
    </form>
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
@endsection
