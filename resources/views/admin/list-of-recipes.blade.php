@extends('layouts.app')

@section('title', "List of Recipes")

@section('content')
<div class="container">
	<div class="row">
		<!-- admin menu -->
		<div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
			<div class="list-group">
				<button class="btn btn-sub list-group-item mb-3">
					Admin Home
				</button>
				<button class="btn btn-sub list-group-item mb-3">
					All Users
				</button>
				<button class="btn btn-main list-group-item mb-3">
					All Recipes
				</button>
				<button class="btn btn-sub list-group-item mb-3">
					All Inquiries
				</button>
				<button class="btn btn-sub list-group-item mb-3">
					All Ads
				</button>
			</div>
		</div>

		<div class="col-lg-10 col-md-10 col-12 my-5">
			<div class="row align-items-center mb-2">
				<div class="col">
					<h3 class="color1 mx-2 mb-0">Recipes</h3>
				</div>
				<div class="col-3 mx-2 mb-1">
					<form action="#" method="get" class="form-inline mx-auto d-flex">
						<input type="text" name="search" placeholder="Search for..." class="form-control form-control-sm input-color1">
					</form>
				</div>
			</div>
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
						<th>Pref Time</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<!-- recipe1 -->
					<tr class="text-center">
						<td>1</td>
						<td>
							<a href="#" class="text-decoration-none">
								<img src="../assets/images/food.jpg" alt="food pic" class="img-sm mx-auto d-block">
							</a>
						</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
								Eggplant
							</a>
						</td>
							<td>Username</td>
							<td>category</td>
							<td>Japan</td>
							<td>vegetarian</td>
							<td>ordinary</td>
							<td>15 min</td>
							<td>
								<div class="dropdown">
									<button class="btn shadow-none badge badge-active" data-bs-toggle="dropdown">
									<i class="fa-solid fa-circle text-success"></i> Active
									</button>
									<div class="dropdown-menu">
										<button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#deactivate-user">
										<i class="fa-solid fa-user-slash"></i> Deactivate
										</button>
										<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
										<i class="fa-solid fa-user-check"></i> Activate
										</button>
									</div>
								</div>
							</td>
						</tr>

					<!-- Recipe2 -->
					<tr class="text-center">
						<td>2</td>
						<td>
							<a href="#" class="text-decoration-none">
								<img src="../assets/images/food.jpg" alt="food pic" class="img-sm mx-auto d-block">
							</a>
						</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
								Eggplant
							</a>
						</td>
							<td>Username</td>
							<td>category</td>
							<td>Japan</td>
							<td>vegetarian</td>
							<td>ordinary</td>
							<td>15 min</td>
							<td>
							<div class="dropdown">
								<button class="btn shadow-none badge badge-deactive" data-bs-toggle="dropdown">
								<i class="fa-regular fa-circle"></i>
									Inactive
								</button>
								<div class="dropdown-menu">
									<button class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#deactivate-user">
									<i class="fa-solid fa-user-slash"></i> Deactivate
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
									<i class="fa-solid fa-user-check"></i> Activate
									</button>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection