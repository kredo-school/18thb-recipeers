@extends('layouts.app')

@section('title', "List of Inquiries")

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
				<button class="btn btn-sub list-group-item mb-3">
					All Recipes
				</button>
				<button class="btn btn-main list-group-item mb-3">
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
					<h3 class="color1 mx-2 mb-0">Inquiries</h3>
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
						<th>Inquirer</th>
						<th>User Type</th>
						<th>Title</th>
						<th>Recieved Time</th>
						<th>Last Update</th>
						<th>Responser</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<!-- recipe1 -->
					<tr class="text-center">
						<td>1</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
								name
							</a>
						</td>
						<td>Guest</td>
						<td>Cannot register</td>
						<td>2024/1/1 12:00</td>
						<td>2024/1/3 12:00</td>
						<td>Mayuko</td>
						<td>
							<div class="dropdown">
								<button class="btn shadow-none badge badge-active" data-bs-toggle="dropdown">
								Pending
								</button>
								<div class="dropdown-menu">
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivate-user">
									Recieved
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
									In Progress
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
									Pending
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
									Solved
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
									Cancelled
									</button>
								</div>
							</div>
						</td>
					</tr>

					<!-- Recipe2 -->
					<tr class="text-center">
						<td>2</td>
						<td>
							<a href="#" class="text-decoration-none text-dark">
								name
							</a>
						</td>
						<td>Guest</td>
						<td>Cannot register</td>
						<td>2024/1/1 12:00</td>
						<td>2024/1/3 12:00</td>
						<td>Minoru</td>
						<td>
							<div class="dropdown">
								<button class="btn shadow-none badge badge-deactive" data-bs-toggle="dropdown">
									Cancelled
								</button>
								<div class="dropdown-menu">
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deactivate-user">
										Recieved
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
										In Progress
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
										Pending
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
										Solved
									</button>
									<button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#activate-user">
										Cancelled
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