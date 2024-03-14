<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Style -->
    <link rel="stylesheet" href="public/assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>

    <title>Recipe Detail | Recipe Title</title> <!-- * Change to variable -->
</head>
<body>
    <div class="container p-5">
        <div class="row justify-content-center">
        <!-- * change above to @extend for navbar and layout -->
            <div class="row mb-4">
                <div class="col">
                    <div class="row">
                        <div class="col-auto me-3">
                            <h2 class="color1">Spring Salad Bowl</h2> <!-- * Change to variable -->
                        </div>
                        <div class="col-auto text-center">
                            <!-- * add if statement (if the user has already bookmarked this recipe)  -->
                            <i class="fa-regular fa-bookmark"></i>
                            <!-- @else
                            <i class="fa-solid fa-bookmark"></i> -->
                            <p class="small">9</p>
                        </div>
                        <div class="col-auto text-center">
                            <!-- * add if statement (if the user has already liked this recipe)  -->
                            <i class="fa-regular fa-heart"></i>
                            <!-- @else
                            <i class="fa-solid fa-heart"></i> -->
                            <p class="small">15</p>
                        </div>
                    </div>
                </div>
                <div class="col-2 text-end">
                    <button class="btn btn-main w-50">Edit</button>
                </div>
            </div>
            <!-- RECIPE INFO -->
            <div class="row">
                <div class="col-4">
                    <!-- * change later -->
                    <img src="{{assets('images/nadine-primeau--ftWfohtjNw-unsplash.jpg')}}" alt="sample recipe" class="img-cover">
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
                            <button class="btn btn-sm btn-outline-success rounded-pill">Salad</button>
                            <button class="btn btn-sm btn-outline-success rounded-pill">Gluten Free</button>
                            <button class="btn btn-sm btn-outline-success rounded-pill">Low Calorie</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <p class="h6">Preferences</p>
                        </div>
                        <div class="col">
                            <button class="btn btn-sm btn-outline-success rounded-pill">Vegan</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <p class="h6">Meal Type</p>
                        </div>
                        <div class="col">
                            <button class="btn btn-sm btn-outline-success rounded-pill">Lunch</button>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3">
                            <p class="h6">Occasion</p>
                        </div>
                        <div class="col">
                            <button class="btn btn-sm btn-outline-success rounded-pill">Easter</button>
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
                            <button class="btn btn-sm btn-outline-success rounded-pill">Canada</button>
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
            <!-- INGREDIENTS -->
            <div class="mt-5">
                <h3 class="mb-4">Ingredients</h3>
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
                        <!-- * change to foreach loop -->
                        <div class="row">
                            <div class="col-6">
                                <p>spinach</p>
                            </div>
                            <div class="col">
                                <p>1 package</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>onion</p>
                            </div>
                            <div class="col">
                                <p>1/2</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>radishes</p>
                            </div>
                            <div class="col">
                                <p>3/4 cup</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>carrot</p>
                            </div>
                            <div class="col">
                                <p>1/2</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>DRESSING</p>
                            </div>
                            <div class="col">
                                <p></p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>vegetable oil</p>
                            </div>
                            <div class="col">
                                <p>1/2 cup</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>cider vinegar</p>
                            </div>
                            <div class="col">
                                <p>2 tablespoons</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>honey</p>
                            </div>
                            <div class="col">
                                <p>2 tablespoons</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>black pepper</p>
                            </div>
                            <div class="col">
                                <p>1/2 teaspoons</p>
                            </div>
                            <hr class="border-success">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>salt</p>
                            </div>
                            <div class="col">
                                <p>1/4 teaspoons</p>
                            </div>
                            <hr class="border-success">
                        </div>

                    </div>
                </div>
            </div>
            <!-- STEPS -->
            <h3 class="mt-5">Steps</h3>
            <!-- * change to foreach loop -->
            <p class="h5 m-3">Step 1</p>
            <div class="row mb-3">
                <div class="col-4">
                    <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="sample recipe" class="w-100">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
                </div>
            </div>
            <p class="h5 m-3">Step 2</p>
            <div class="row mb-3">
                <div class="col-4">
                    <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="sample recipe" class="w-100">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
                </div>
            </div>
            <p class="h5 m-3">Step 3</p>
            <div class="row mb-3">
                <div class="col-4">
                    <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="sample recipe" class="w-100">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
                </div>
            </div>
            <p class="h5 m-3">Step 4</p>
            <div class="row mb-3">
                <div class="col-4">
                    <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="sample recipe" class="w-100">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
                </div>
            </div>
            <p class="h5 m-3">Step 5</p>
            <div class="row mb-3">
                <div class="col-4">
                    <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="sample recipe" class="w-100">
                </div>
                <div class="col">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti quasi deserunt distinctio molestiae esse similique eius aliquid minus voluptatibus, provident nemo nihil doloremque ipsum beatae? Quas magnam amet odit quos!</p>
                </div>
            </div>
            <!-- COMMENTS -->
            <h3 class="mt-5 mb-4">Comments</h3>
            <div class="card">
                    <div class="input-group my-3">
                        <!-- * add form elements and variables -->
                        <textarea name="comment" id="comment" rows="1" class="form-control form-control-sm" placeholder="Add a comment..."></textarea>
                        <button class="btn btn-warning btn-sm px-4">Post</button>
                    </div>
                <div class="card-body">
                    <!-- * change to foreach loop -->
                    <div class="row">
                        <div class="col-auto">
                            <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="avatar" class="icon-sm">
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                        </div>
                        <div class="col-2 text-end">
                            <p class="small fw-lighter">2024/03/13 20:01:43</p>
                        </div>
                        <div class="col-auto">
                            <!-- * change to button -->
                            <i class="fa-solid fa-trash-can text-secondary"></i>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="avatar" class="icon-sm">
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                        </div>
                        <div class="col-2 text-end">
                            <p class="small fw-lighter">2024/03/13 20:11:23</p>
                        </div>
                        <div class="col-auto">
                            <!-- * change to button -->
                            <i class="fa-solid fa-trash-can text-secondary"></i>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <img src="/public/assets/images/nadine-primeau--ftWfohtjNw-unsplash.jpg" alt="avatar" class="icon-sm">
                        </div>
                        <div class="col">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, iusto?</p>
                        </div>
                        <div class="col-2 text-end">
                            <p class="small fw-lighter">2024/03/13 21:07:32</p>
                        </div>
                        <div class="col-auto">
                            <!-- * change to button -->
                            <i class="fa-solid fa-trash-can text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        <!-- * delete below after adding @exdends -->
        </div>
    </div>
</body>
</html>