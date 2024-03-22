@extends('layouts.app')

@section('title', "List of Accounts")

@section('content')
<div class="container">
	<div class="row">
		<!-- admin menu -->
		<div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
			<div class="list-group">
				<button class="btn btn-sub list-group-item mb-3">
					Admin Home
				</button>
				<button class="btn btn-main list-group-item mb-3">
					All Users
				</button>
				<button class="btn btn-sub list-group-item mb-3">
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
					<h3 class="color1 mx-2 mb-0">Users</h3>
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
						<th></th>
						<th>Username</th>
						<th>User Type</th>
						<th>Eating Pref</th>
						<th>Gender</th>
						<th>Nationality</th>
						<th>Occupation</th>
						<th>Recipes</th>
						<th>Followers</th>
						<th>Likes</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<!-- User1 -->
					<tr class="text-center">
						<td>1</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
							<img src="../assets/images/user.jpg" alt="user avatar" class="rounded-circle img-sm mx-auto d-block">
							</a>
						</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
							User1
							</a>
						</td>
						<td>Private</td>
						<td>Vegan</td>
						<td>Female</td>
						<td>Japan</td>
						<td>Teacher</td>
						<td>0</td>
						<td>2</td>
						<td>7</td>
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

					<!-- User2 -->
					<tr class="text-center">
						<td>2</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
							<i class="fa-solid fa-circle-user text-secondary icon-md d-block text-center"></i>
							</a>
						</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
							User2
							</a>
						</td>
						<td>Business</td>
						<td>Vegan</td>
						<td>Male</td>
						<td>Canada</td>
						<td>Engineer</td>
						<td>0</td>
						<td>2</td>
						<td>7</td>
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