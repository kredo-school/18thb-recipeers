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
                            <input type="text" name="search" placeholder="Search for..."
                                class="form-control form-control-sm input-color1">
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
                                            <a class="dropdown-item" href="{{route('all-recipes')}}">Posts</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('bookmarks')}}">Bookmarks</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('liked-recipes')}}">Liked Recipes</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown">
                                    <button class="btn dropdown-menu-togglebtn2" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-circle-user icon-sm color1"></i>
                                    </button>

                                <div id="dropdownMenuButton2" class="dropdown-menu dropdown-menu-end">
                                    @can('admin')
                                    <li>
                                        <a href="{{route('liked-recipes')}}" class="dropdown-item">
                                            {{-- admin homeに繋げる --}}
                                        Admin
                                        </a>
                                    </li>
                                    @endcan

                                    <li>
                                        <a href="{{ route('profile.show', ['id' => auth()->user()->id]) }}" class="dropdown-item">Profile
                                        </a>
                                    </li>
                                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form>
                                </div>
                            </div>
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
                                <a class="nav-link" href="{{route('inquiry')}}">Contact Us</a>
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

    </body>

    </html>
