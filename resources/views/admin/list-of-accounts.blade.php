@extends('layouts.app')

@section('title', "List of Accounts")

@section('content')
<div class="container">
	<div class="row">
		{{-- Admin menu --}}
		<div class="col-lg-2 col-md-2 col-12 my-5 mr-2">
			<div class="list-group">
				<a href="{{ route('admin.home') }}" class="btn btn-sub list-group-item mb-3">
					Admin Home
				</a>
				<a href="{{ route('admin.users.show') }}" class="btn btn-main list-group-item mb-3">
					All Users
				</a>
				<a href="{{ route('admin.recipes.show') }}" class="btn btn-sub list-group-item mb-3">
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
					<h3 class="color1 mx-2 mb-3">Users</h3>
				</div>
				<div class="col-3 mx-2 mb-1">
					<form action="{{ route('admin.users.show') }}" method="get" class="form-inline mx-auto d-flex">
						<input type="text" name="search" id="searchInput" value="{{ $search ?? '' }}" placeholder="Search in the table" class="form-control form-control-sm input-color1">
					</form>
				</div>
			</div>
			{{-- List of users --}}
			<table class="table table-hover bg-white align-middle border text-center" id="accountTable">
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
				<tbody class="fw-light">
					@if ($users->count() > 0)
						@foreach($users as $user)
							<tr class="text-center">
								<td>{{ $user->id }}</td>
								<td>
									<a href="{{ route('profile.show', $user->id) }}" class="text-decoration-none text-dark">
										@if($user->avatar)
											<img src="{{ $user->avatar }}" alt="{{ $user->username }}" class="rounded-circle img-sm mx-auto d-block">
										@else
											<i class="fa-solid fa-circle-user color1 icon-md d-block text-center"></i>
										@endif
									</a>
								</td>
								<td>
									<a href="{{ route('profile.show', $user->id) }}">
										{{ $user->username }}
									</a>
								</td>
								<td>
									@if($user->role_id == 3)
										Business
									@elseif($user->role_id == 2)
										Private
									@elseif($user->role_id == 1)
										Admin
									@endif
								</td>
								<td>{{ $user->eating_pref ?? 'N/A' }}</td>
								<td>{{ $user->gender ?? 'N/A' }}</td>
								<td>{{ $user->nationality ?? 'N/A' }}</td>
								<td>{{ $user->job_status ?? 'N/A' }}</td>
								<td>{{ $user->recipes->count() }}</td>
								<td>0</td>
								<td>0</td>
								<td>
									<div class="dropdown">
										@if($user->status == "active")
											<span role="button" class="badge badge-active dropdown-toggle px-3" data-bs-toggle="dropdown">
												<i class="fa-solid fa-circle color1 small"></i> {{ $user->status }}
											</span>
											<div class="dropdown-menu">
												<button class="dropdown-item fw-bold color5" data-bs-toggle="modal" data-bs-target="#deactivate-account-{{ $user->id }}">
													<i class="fa-solid fa-user-slash"></i> Deactivate
												</button>
											</div>
											@include('modals.list-of-accounts-deactivate')
										@elseif($user->status == "deactivated")
											<span role="button" class="badge badge-deactive dropdown-toggle" data-bs-toggle="dropdown">
												<i class="fa-regular fa-circle small"></i> {{ $user->status }}
											</span>
											<div class="dropdown-menu">
												<form action="{{ route('admin.users.activate', $user->id) }}" method="post">
													@csrf
													@method('PATCH')
													
													<button type="submit" class="dropdown-item fw-bold color1">
														<i class="fa-solid fa-user-check"></i> Activate
													</button>
												</form>
											</div>
										@endif
									</div>
									{{-- <div class="dropdown">
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
									</div> --}}
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="11">
								<p class="text-secondary fw-light fst-italic my-2">No users found matching your search criteria.</p>
							</td>
						</tr>
					@endif
				</tbody>
			</table>
			<div class="d-flex justify-content-center">
				{{ $users->appends(['search' => $search])->links() }}
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		function filterTable(searchInput) {
			var searchText = searchInput.toLowerCase();
			$('#accountTable tbody tr').each(function() {
				var rowText = $(this).text().toLowerCase();
				$(this).toggle(rowText.indexOf(searchText) > -1);
			});
		}
	
		$('#searchInput').on('keyup', function() {
			var searchInput = $(this).val();
			filterTable(searchInput);
		});
	});
</script>

@endsection