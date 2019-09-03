@extends('STANBIC.layout')
@section('content')
	<div class="container">	
			<div class="row">
					<div class="col-md-3">	
							<div class="text-center my-3">
									<div class="bank-admin-image">	</div>	
							</div>
							<div class="bank-admin-info ">
									<h5>Bank Tickets <sup><span class="text-right badge badge-info">{{$totalTickets}}</span></h5></sup>
									<h5>Bank Visits <sup><span class="text-right badge badge-primary">{{$totalBrancVisits}}</span></h5></sup>
									<h5>Pending Tickets <sup><span class="text-right badge badge-danger">{{$countPendingTickets}}</span></h5></sup>
									<h5>closed Tickets <sup><span class="text-right badge badge-success">{{$closedTickets}}</span></h5></sup>
							</div>
					</div>	
					<div class="col-md-9">
							<div class="card my-3">
									<div class="card-header text-center">All Stanbic Tickets</div>	
									<div class="card-body">	
											<table class="table">	
													<thead>	
															<tr>	
																	<td>id</td>
																	<td>Branch</td>
																	<td>Title</td>
															</tr>

													</thead>
													<tbody>	
															@foreach($stanbicTickets as $tickets)
															<tr>	
																<td>{{$tickets->id}}</td>
																<td>{{$tickets->location}}</td>		
																<td>{{$tickets->title}}</td>		
																		
															</tr>
															@endforeach
													</tbody>
											</table>
											{{$stanbicTickets->links()}}

									</div>
							</div>	
					</div>
			</div>
	</div>
@endsection