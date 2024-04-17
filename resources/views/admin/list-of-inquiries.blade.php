@extends('layouts.app')

@section('title', "List of Inquiries")

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
				<a href="{{ route('admin.recipes.show') }}" class="btn btn-sub list-group-item mb-3">
					All Recipes
				</a>
				<a href="{{ route('admin.inquiries.show') }}" class="btn btn-main list-group-item mb-3">
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
					<h3 class="color1 mx-2 mb-3">Inquiries</h3>
				</div>
				<div class="col-3 mx-2 mb-1">
					<form action="#" method="get" class="form-inline mx-auto d-flex">
					<input type="text" name="search" placeholder="Search in the table" class="form-control form-control-sm input-color1">
					</form>
				</div>
			</div>
			{{-- List of inquiries --}}
			<table class="table table-hover bg-white align-middle border text-center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Inquirer</th>
						<th>User Type</th>
						<th>Recieved Time</th>
						<th>Last Update</th>
						<th>Responder</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody class="fw-light">
					@foreach($all_inquiries as $inquiry)
						<tr class="text-center">
							<td>{{ $inquiry->id }}</td>
							<td><a href="{{ route('admin.inquiry.detail', $inquiry->id) }}">{{ $inquiry->title }}</a></td>
							<td>
								@if(isset($inquiry->user_id))
									<a href="{{ route('profile.show', $inquiry->user->id) }}" class="text-decoration-none">
										{{ $inquiry->inquirer_name }}
									</a>
								@else
									{{ $inquiry->inquirer_name }}
								@endif
							</td>
							<td>
								@if(isset($inquiry->user_id) && $inquiry->user->role_id == 3)
									Business
								@elseif(isset($inquiry->user_id) && $inquiry->user->role_id == 2)
									Private
								@else
									Guest
								@endif
							</td>
							<td class="small">{{ $inquiry->created_at }}</td>
							<td class="small">{{ $inquiry->updated_at }}</td>
							<td>{{ $inquiry->admin->username ?? 'N/A' }}</td>
							<td>
								@if($inquiry->status == "Received")
									<span class="shadow-none badge badge-received">
										{{ $inquiry->status }}
									</span>
								@elseif($inquiry->status == "In progress")
									<span class="shadow-none badge badge-in-progress">
										{{ $inquiry->status }}
									</span>
								@elseif($inquiry->status == "Pending")
									<span class="shadow-none badge badge-pending">
										{{ $inquiry->status }}
									</span>
								@elseif($inquiry->status == "Resolved")
									<span class="shadow-none badge badge-resolved">
										{{ $inquiry->status }}
									</span>
								@elseif($inquiry->status == "Cancelled")
									<span class="shadow-none badge badge-deactive">
										{{ $inquiry->status }}
									</span>
								@endif
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="d-flex justify-content-center">
				{{ $all_inquiries->links() }}
			</div>
		</div>
	</div>
</div>

@endsection
