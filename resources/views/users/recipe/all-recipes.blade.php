@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="row">
		<h2 class="color1 my-3 mx-2">Recipes</h2>
	</div>
	<div class="dropdown mb-3">
		<button class="btn dropdown-toggle dropdown-menu-togglebtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
			New To Old
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			<li><a class="dropdown-item" href="#">Old to new</a></li>
		</ul>
    </div>

	<div class="row">
	<!-- card index -->
		<div class="col-lg-8 col-md-8 col-12">
			 <div class="row">
			<!-- card -->
				<div class="col-4 col-lg-4 col-md-4 col-12">
					<div class="card d-flex flex-column mb-4 p-2">
						<!-- card header -->
						<div class="card-header bg-white mx-auto">
							<img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
						</div>
						<!-- card body -->
						<div class="card-body bg-white">
							<div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							<!-- Recipe Title -->

                            <h4>Recipe Title</h4>
                            {{-- Recipe Over View --}}
                            <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            <button type="button" class="btn btn-main">View Details</button>
						</div>
					</div>
            	</div>
				<div class="col-4 col-lg-4 col-md-4 col-12">
					<div class="card d-flex flex-column mb-4 p-2">
						<!-- card header -->
						<div class="card-header bg-white mx-auto">
							<img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
						</div>
						<!-- card body -->
						<div class="card-body bg-white">
							<div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							<!-- Recipe Title -->

                            <h4>Recipe Title</h4>
                            {{-- Recipe Over View --}}
                            <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            <button type="button" class="btn btn-main">View Details</button>
						</div>
					</div>
            	</div>
				<div class="col-4 col-lg-4 col-md-4 col-12">
					<div class="card d-flex flex-column mb-4 p-2">
						<!-- card header -->
						<div class="card-header bg-white mx-auto">
							<img src="{{ asset('/assets/images/food.jpg') }}" alt="card-pic" class="img-card img-fluid">
						</div>
						<!-- card body -->
						<div class="card-body bg-white">
							<div class="row">
                                {{-- Tag --}}
                                <div class="col-auto">
                                    <span class="badge badge-pref border rounded-pill">Vegan</span>
                                </div>
                                {{-- Bookmark --}}
                                <div class="col">
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-bookmark"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                        {{-- Heart --}}
                                        <div class="col-auto">
                                            <div class="fa-layers d-flex flex-column align-items-center">
                                                <i class="fa-regular fa-heart"></i>
                                                <span class="fa-layers-counter">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
							<!-- Recipe Title -->

                            <h4>Recipe Title</h4>
                            {{-- Recipe Over View --}}
                            <p class="small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, tempora.</p>
                            <button type="button" class="btn btn-main">View Details</button>
						</div>
					</div>
            	</div>


			</div>
		</div>

		<!-- ads -->
		<div class="col-lg-4 col-md-4 col-12">
			<img src="{{ asset('/assets/images/ad1.jpg') }}" alt="ad1" class="w-100 img-fluid mb-3 ml-5">
			<img src="{{ asset('/assets/images/ad2.jpg') }}" alt="ad2" class="w-100 img-fluid mb-3 ml-5">
			<img src="{{ asset('/assets/images/ad3.jpg') }}" alt="ad3" class="w-100 img-fluid mb-3 ml-5">
			<img src="{{ asset('/assets/images/ad4.jpg') }}" alt="ad4" class="w-100 img-fluid mb-3 ml-5">
		</div>
	</div>
</div>

@endsection
