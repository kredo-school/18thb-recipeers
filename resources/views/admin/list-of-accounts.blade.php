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
					<form action="#" method="get" class="form-inline mx-auto d-flex">
					<input type="text" name="search" placeholder="Search for..." class="form-control form-control-sm input-color1">
					</form>
				</div>
			</div>
			{{-- List of users --}}
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
				<tbody class="fw-light">
					@foreach($all_users as $user)
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
							<td>{{ $user->eating_pref->name ?? 'N/A' }}</td>
							<td>{{ $user->gender->gender ?? 'N/A' }}</td>
							<td>{{ $user->nationality->name ?? 'N/A' }}</td>
							<td>{{ $user->job_status->name ?? 'N/A' }}</td>
							<td>{{ $user->recipes->count() }}</td>
							<td>0</td>
							<td>0</td>
							<td>
								<div class="dropdown">
									@if($user->status == "active")
										<span role="button" class="badge badge-active dropdown-toggle" data-bs-toggle="dropdown">
											<i class="fa-solid fa-circle color1 small"></i> {{ $user->status }}
										</span>
										<div class="dropdown-menu">
											<button class="dropdown-item color5" data-bs-toggle="modal" data-bs-target="#deactivate-account-{{ $user->id }}">
												<i class="fa-solid fa-user-slash"></i> Deactivate
											</button>
										</div>
									@elseif($user->status == "deactivated")
										<span role="button" class="badge badge-deactive dropdown-toggle" data-bs-toggle="dropdown">
											<i class="fa-regular fa-circle small"></i> {{ $user->status }}
										</span>
										<ul class="dropdown-menu">
											<li>
												<button class="dropdown-item color1" data-toggle="modal" data-target="#activateModal{{ $user->id }}">
													<i class="fa-solid fa-user-check"></i> Activate
												</button>
											</li>
										</ul>
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
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection