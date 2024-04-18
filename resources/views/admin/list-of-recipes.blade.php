@extends('layouts.app')

@section('title', "List of Recipes")

@section('content')
<div class="container">
	<div class="row">
		{{-- Admin menu --}}
		<div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
			<div class="list-group">
				<a href="{{ route('admin.home') }}" class="btn btn-sub list-group-item mb-3">
					Admin Home
				</a>
				<a href="{{ route('admin.users.show') }}" class="btn btn-sub list-group-item mb-3">
					All Users
				</a>
				<a href="{{ route('admin.recipes.show') }}" class="btn btn-main list-group-item mb-3">
					All Recipes
				</a>
				<a href="{{ route('admin.inquiries.show') }}" class="btn btn-sub list-group-item mb-3">
					All Inquiries
				</a>
				{{-- <a href="{{ route('admin.') }}" class="btn btn-sub list-group-item mb-3">
					All Ads
				</a> --}}
			</div>
		</div>
	{{-- Title and search box --}}
		<div class="col-lg-10 col-md-10 col-12 my-5">
			<div class="row align-items-center mb-2">
				<div class="col">
					<h3 class="color1 mx-2 mb-3">Recipes</h3>
				</div>
				<div class="col-3 mx-2 mb-1">
					<form action="#" method="get" class="form-inline mx-auto d-flex">
						<input type="text" name="search" placeholder="Search in the table" class="form-control form-control-sm input-color1">
					</form>
				</div>
			</div>
			{{-- List of recipes --}}
			<table class="table table-hover bg-white align-middle border text-center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Thumbnail</th>
						<th>Title</th>
						<th>User</th>
						<th>Category</th>
						<th>Conuntry of Origin</th>
						<th>Pref Occations</th>
						<th>Mealtype</th>
						<th>Prep Time</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody class="fw-light">
					@foreach($all_recipes as $recipe)
						<tr class="text-center">
							<td>{{ $recipe->id }}</td>
							<td>
								<a href="{{ route('recipe.show', $recipe->id) }}" class="text-decoration-none">
									@if($recipe->thumbnail)
										<img src="{{ $recipe->thumbnail }}" alt="{{ $recipe->title }}" class="img-sm mx-auto d-block">
									@else
										<i class="fa-sharp fa-solid fa-image color1 icon-md d-block text-center"></i>
									@endif
								</a>
							</td>
							<td>
								<a href="{{ route('recipe.show', $recipe->id) }}">
									{{ $recipe->title }}
								</a>
							</td>
							<td>
								<a href="{{ route('profile.show', $recipe->user->id) }}" class="text-decoration-none">
									{{ $recipe->user->username ?? 'N/A' }}
								</a>
							</td>
							<td>{{ $recipe->category }}</td>
							<td>{{ $recipe->country }}</td>
							<td>{{ $recipe->occasion }}</td>
							<td>{{ $recipe->meal_type }}</td>
							<td>{{ $recipe->prep_time }} min</td>
							<td>
								<div class="dropdown">
									@if($recipe->status == "visible")
										<span role="button" class="badge badge-active dropdown-toggle px-2" data-bs-toggle="dropdown">
											<i class="fa-solid fa-circle color1 small"></i> {{ $recipe->status }}
										</span>
										<div class="dropdown-menu">
											<form action="{{ route('admin.recipes.hide', $recipe->id) }}" method="post">
												@csrf
												@method('DELETE')

												<button type="submit" class="dropdown-item fw-bold color5">
													<i class="fa-solid fa-eye-slash"></i> Hide
												</button>
											</form>
										</div>
									@elseif($recipe->status == "hidden")
										<span role="button" class="badge badge-deactive dropdown-toggle" data-bs-toggle="dropdown">
											<i class="fa-regular fa-circle small"></i> {{ $recipe->status }}
										</span>
										<div class="dropdown-menu">
											<form action="{{ route('admin.recipes.unhide', $recipe->id) }}" method="post">
												@csrf
												@method('PATCH')
												
												<button type="submit" class="dropdown-item fw-bold color1">
													<i class="fa-solid fa-eye"></i> Unhide
												</button>
											</form>
										</div>
									@endif
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="d-flex justify-content-center">
				{{ $all_recipes->links() }}
			</div>
		</div>
	</div>
</div>

@endsection
