@extends('Admin.adminlayout')
@section('content')
	<div class="container" style="">
		<div class="row">
			<div class="col-md-3">
			<!--admin-nav-->
				<div class="admin-nav">
					<div class="admin-image text-center my-3" style=""></div>
					<h3 class="text-center border-bottom">{{Auth::User()->name}}</h3>
					<h3 >All Tickets <sup><span class="badge badge-info">{{$countAllTickets}}</span></sup></h3>
					<h3 class="admin-pending"><a href="#pending-tickets">Pending </a><sup><span class="badge badge-danger">{{ $countAllPendingTickets}}</span></sup></h3>
					<h3 class="admin-closed"><a href="#admin-closed">Closed </a><sup><span class="badge badge-success">{{$countAllclosedTickets}}</span></sup></h3>
					<h3 class="admin-reports">Field Reports <sup><span class="badge badge-danger">{{$countReports}}</span></sup></h3>
					<h3 class="admin-reports"><a href="{{ url('/users')}}">users</a><sup><span class="badge badge-danger"></span></sup></h3>


				</div>
			<!--end of admin-nav-->
			</div>
			<!--col-md-9-->
			<div class="col-md-9">
				<div class="card my-3 bank-tickets">
					<div class="card-header text-center">Bank Tickets</div>
					<div class="card-body">
						@if($tickets->isEmpty())
							<h3 class="text-danger">No Tickets Yet</h3>
						@endif
						<table class="table table-striped border">
						<thead>
							<tr>
								<td>id</td>
								<td>Title</td>
								<td>Bank</td>
								
							</tr>
						</thead>
						<tbody>
						@foreach($tickets as $ticket)	
						<tr>
							<td><a href="{{action('AdminController@show', $ticket->url)}}">{{$ticket->id}}</a></td>
							<td>{{$ticket->title}}</td>
							<td>{{$ticket->client}}</td>
						</tr>
						@endforeach
						</tbody>
						</table>
						{{$tickets->links()}}
					</div>
				</div>
				<!--pending tickets-->
				<div class="card my-5 pending-tickets" id="pending-tickets">
					<div class="card-header text-center">Pending Tickets</div>
					<div class="card-body">
					<table class="table table-striped border">
						<thead>
							<tr>
								<td>id</td>
								<td> Title</td>
								<td>Bank</td>
								
							</tr>
						</thead>	
							<tbody>
							@foreach($pendingTickets as $pendingTicket)
								<tr>
									<td>{{$pendingTicket->id}}</td>
									<td>{{$pendingTicket->title}}</td>
									<td>{{$pendingTicket->client}}</td>
								
								</tr>
							@endforeach
							</tbody>	
					</table>
					{{$pendingTickets->links()}}
					</div>
				</div>
				<!--end of pending tickets-->
				<!--closed tickets-->
				<div class="card my-5 closed-tickets" id="closed-tickets">
					<div class="card-header text-center">Closed Tickets</div>
					<div class="card-body">
						<table class="table table-striped border">
							<thead>
								<tr>
								<td>id</td>
								<td> Title</td>
								<td>Bank</td>
						
								</tr>
							</thead>
							<tbody>
							@foreach($closedTickets as $closedTicket)
								<tr>
									<td>{{$closedTicket->id}}</td>
									<td>{{$closedTicket->title}}</td>
									<td>{{$closedTicket->client}}</td>
								
								</tr>
							@endforeach
							</tbody>
						</table>
						{{$closedTickets->links()}}
					</div>
				</div>
				<!--closed tickets-->
			</div>
			<!--end of col-md-9-->
		</div>
	</div>
@endsection