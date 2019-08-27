@extends('Admin.adminlayout')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="card my-5">
					<div class="card-header">
						<p><strong>The problem is </strong> : <ins>{{$ticket->title}}</ins> occured on  {{$ticket->date}}</p>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
								<p>ID : </p>
							</div>
							<div class="col-md-9">
								<p>{{$ticket->id}}</p>
							</div>
							<div class="col-md-3">
								<p>BANK: </p>
							</div>
							<div class="col-md-9">
								<p>{{$ticket->client}}</p>
							</div><div class="col-md-3">
								<p>BRANCH : </p>
							</div>
							<div class="col-md-9">
								<p>{{$ticket->location}}</p>
							</div><div class="col-md-3">
								<p>Description : </p>
							</div>
							<div class="col-md-9">
								<p>{{$ticket->description}}</p>
							</div>
						</div>

					</div>
					<div class="text-center">
						<a href="{{url('admin/')}}" class="btn btn-info">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection