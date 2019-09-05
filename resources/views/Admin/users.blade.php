@extends('Admin.adminlayout')
@section('content')
	<div class="container" style="">
		<div class="row">
			<div class="col-md-3">
			<!--admin-nav-->
				<div class="admin-nav">
					<div class="admin-image text-center my-3" style=""></div>
					<h3 class="text-center border-bottom">{{Auth::User()->name}}</h3>
					<h3 class="admin-reports"><a href="{{ url('/users')}}">users</a><sup><span class="badge badge-danger"></span></sup></h3>
				</div>
			<!--end of admin-nav-->
			</div>
			<!--col-md-9-->
			<div class="col-md-9">
				<div class="card my-3 bank-tickets">
					<div class="card-header text-center">Available Users</div>
					<div class="card-body">
						@if($users->isEmpty())
							<h3 class="text-danger">No Users</h3>
						@endif
						<table class="table table-striped">
							<thead>
								<tr>
									<td>Name</td>
									<td>Email</td>
									<td>Type</td>
									<td>Org</td>
									<td>Created</td>

								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->organisation}}</td>
									<td>{{$user->type}}</td>
									<td>{{$user->created_at}}</td>

								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="text-center">
							<a href="{{url('admin/')}}" class="btn btn-info">Back</a>
						</div>
			</div>
			<!--end of col-md-9-->
		</div>
	</div>
@endsection