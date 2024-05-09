<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') | {{ config('app.name', 'Laravel') }}</title>

    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap"
        rel="stylesheet">

    {{-- jquery & popper --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo img-fluid">
                    </a>
                    <!-- hamburger button for responsive -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form action="#" method="get" class="form-inline mx-auto d-flex ">
                            <input type="text" name="search" id="search_bar" placeholder="Search for..."
                                class="form-control form-control-sm input-color1">
                            <p id="search_text"></p>
                        </form>

                        @guest
                            @if (Route::has('login'))
                                <a class="nav-link me-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="nav-link me-3" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                            @endif
                        @else
                        <ul class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <button class="btn dropdown-toggle dropdown-menu-togglebtn" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Recipe
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('all-recipes') }}">Posts</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('bookmarks') }}">Bookmarks</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('liked-recipes') }}">Liked Recipes</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button class="btn dropdown-menu-togglebtn2" type="button" id="dropdownMenuButton2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-circle-user icon-sm color1"></i>
                                </button>

                                <div id="dropdownMenuButton2" class="dropdown-menu dropdown-menu-end">
                                    @can('admin')
                                    <li>
                                        <a href="{{route('admin.home')}}" class="dropdown-item">
                                        Admin
                                        <a href="{{ route('profile.show', ['id' => auth()->user()->id]) }}" class="dropdown-item">
                                            <i class="fa-solid fa-circle-user"></i> Profile
                                        </a>
                                    </li>
                                    @endcan

                                    <li>
                                        <a href="{{ route('profile.show', ['id' => auth()->user()->id]) }}" class="dropdown-item">Profile</a>
                                    </li>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </div>
                            </div>
                        </ul>
                        @endif

                            <!-- * add Translate API-->
                            <a href="#" class="nav-link">En</a>
                    </div>
                </div>
            </nav>
        </header>

        <div class="horizontal-line2"></div>
        <div class="horizontal-line3"></div>
        <div class="horizontal-line4"></div>

        <main>
            @yield('content')
        </main>

        <div class="horizontal-line4"></div>
        <div class="horizontal-line3"></div>
        <div class="horizontal-line2"></div>

        <footer>
            <div>
                <nav class="navbar navbar-expand-md navbar-light bg-white">
                    <div class="container">
                        <div class="footer-widgets">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo img-fluid">
                            </a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('inquiry') }}">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Conditions of Use</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="text-center bg-white">
                    <small>Copyright© Kredo Recipeers</small>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

{{-------------------------jQuery---------------------------}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        'use strict';

        // Add Ingredients Form Function
        {
            document.addEventListener('DOMContentLoaded', () => {
                let i = 1;
                document.querySelector('#add_ing_btn').addEventListener('click', (e) => {
                    e.preventDefault();

                    const divRowElement = document.createElement('div');
                    const divIngColElement = document.createElement('div');
                    const divAmoColElement = document.createElement('div');
                    const inputIngElement = document.createElement('input');
                    const inputAmoElement = document.createElement('input');

                    divRowElement.classList.add('row', 'mb-2');
                    divIngColElement.classList.add('col-4');
                    divAmoColElement.classList.add('col-4');
                    inputIngElement.classList.add('form-control', 'input-color1');
                    inputAmoElement.classList.add('form-control', 'input-color1');
                    inputIngElement.placeholder = 'Ingredient';
                    inputAmoElement.placeholder = 'Ammount';
                    inputIngElement.id = 'ing_input' + i;
                    inputAmoElement.id = 'amo_input' + i;

                    const parent = document.querySelector('#add_ing_form');

                    parent.appendChild(divRowElement).appendChild(divIngColElement).appendChild(inputIngElement);
                    divRowElement.appendChild(divAmoColElement).appendChild(inputAmoElement);
                    i++;
                });
            });
        }

        // Add Steps Form Function
        {
            document.addEventListener('DOMContentLoaded', () => {
                let i = 1;
                let j = 2;
                document.querySelector('#add_step_btn').addEventListener('click', (e) => {
                    e.preventDefault();

                    const stepElement = document.createElement('h5');
                    const divRowElement = document.createElement('div');
                    const divImageColElement = document.createElement('div');
                    const divTextColElement = document.createElement('div');
                    const fileInputElement = document.createElement('input');
                    const textInputElement = document.createElement('textarea');

                    stepElement.textContent = 'Step' + j;
                    stepElement.classList.add('color1');
                    divRowElement.classList.add('row', 'mb-2');
                    divImageColElement.classList.add('col-4');
                    divTextColElement.classList.add('col-8');
                    fileInputElement.classList.add('form-control', 'input-color1');
                    fileInputElement.type = 'file';
                    textInputElement.classList.add('form-control', 'input-color1');
                    textInputElement.rows = '5';
                    fileInputElement.id = 'file_input' + i;
                    textInputElement.id = 'text_input' + i;

                    const parent = document.querySelector('#add_step_form');

                    parent.appendChild(stepElement);

                    parent.appendChild(divRowElement).appendChild(divImageColElement).appendChild(fileInputElement);
                    divRowElement.appendChild(divTextColElement).appendChild(textInputElement);
                    i++;
                    j++;
                });
            });
        }

        // Confirm all input infomation
        {
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelector('#recipe_save').addEventListener('click', (e) => {
                    e.preventDefault();

                    console.log(document.querySelector('#file_input1'));

                    const ingData = {};

                    let ingNum = 0;

                    while (true) {
                        const ingInput = document.querySelector('#ing_input' + ingNum);
                        const amoInput = document.querySelector('#amo_input' + ingNum);

                        if (!ingInput || !amoInput) {
                            break;
                        }

                        ingData['ing_input' + ingNum] = ingInput.value;
                        ingData['amo_input' + ingNum] = amoInput.value;

                        ingNum++;
                    }

                    const stepData = {};

                    let stepNum = 0;

                    while (true) {
                        const fileInput = document.querySelector('#file_input' + stepNum);
                        const textInput = document.querySelector('#text_input' + stepNum);

                        if (!fileInput || !textInput) {
                            break;
                        }

                        console.log('Check the file of fileInput');
                        console.log(fileInput.files);

                        console.log('Check the value of textInput');
                        console.log(textInput);

                        if(fileInput.files.length > 0) {
                            stepData['file_input' + stepNum] = fileInput.files[stepNum];
                        }
                        stepData['text_input' + stepNum] = textInput.value;

                        stepNum++;
                    }

                    console.log('Check the stepData');
                    console.log(stepData);

                    // const data = $("#recipe_form").serialize() + "&ingData=" + JSON.stringify(ingData);
                    const data = $("#recipe_form").serializeArray();

                    data.push(({ name: 'ingData', value: JSON.stringify(ingData) }));
                    data.push(({ name: 'stepData', value: JSON.stringify(stepData) }));

                    // console.log(data);

                    // It store category with asynchronous
                    $.ajax({
                        url: "{{ route('category.store') }}",
                        type: "POST",
                        data: data,
                        success: function(res){console.log(res);},
                        fail: function(err){console.log(err);}
                    });

                    // It store eat_pref with asynchronous
                    $.ajax({
                        url: "{{ route('eat_pref.store') }}",
                        type: "POST",
                        data: data,
                        success: function(res){console.log(res);},
                        fail: function(err){console.log(err);}
                    });

                    // It store ingredient with asynchronous
                    $.ajax({
                        url: "{{ route('ingredient.store') }}",
                        type: "POST",
                        data: data,
                        success: function(res){console.log(res);},
                        fail: function(err){console.log(err);}
                    });

                    $.ajax({
                        url: "{{ route('step.store') }}",
                        type: "POST",
                        data: data,
                        success: function(res){console.log(res);},
                        fail: function(err){console.log(err);}
                    });

                    // It store recipe data with asynchronous
                    $.ajax({
                        url: "{{ route('recipe.store') }}",
                        type: "POST",
                        data: data,
                        success: function(res){console.log(res);},
                        fail: function(err){console.log(err);}
                    });
                });
            });
        }
    </script>

</body>
</html>
