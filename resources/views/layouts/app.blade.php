<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

{{-- google font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">

<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Scripts -->
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

{{-- css --}}
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
  <div id="app">
    <header>
		<nav class="navbar navbar-expand-md navbar-light bg-white">
			<div class="container">
				<a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo img-fluid">
				</a>
				<!-- hamburger button for responsive -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<form action="#" method="get" class="form-inline mx-auto d-flex ">
					<input type="text" name="search" placeholder="Search for..." class="form-control form-control-sm input-color1">
					</form>
				  <ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="">Home</a>
					</li>
					<div class="dropdown">
						<button class="btn dropdown-toggle dropdown-menu-togglebtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
						Recipe
					</button>
					<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						<li>
                        <a class="dropdown-item" href="#">Posts</a>
                        </li>
						<li><a class="dropdown-item" href="#">Bookmarks</a></li>
						<li><a class="dropdown-item" href="#">Liked Recipes</a></li>
					</ul>
					</div>
					<li class="nav-item">
					 <a href="#" class="nav-link">
					 <i class="fa-solid fa-circle-user icon-sm color1"></i>
					 </a>
                    </li>
					<!-- * add Translate API-->
					<li>
					 <a href="#" class="nav-link">En</a>
					</li>
				  </ul>
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
                      <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo img-fluid">
                      </a>
                    </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>

</body>
</html>
