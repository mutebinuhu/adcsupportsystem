<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/application.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<title>Collect Data</title>
</head>
<body>
        @include('layouts.nav')
          <div class="jumbotron adc-header">
            <div class="text-center"><h1 class="adc-welcome-text">Welcome  {{Auth::User()->name}}</h1></div>
            <div class="text-center my-5">
            </div>
          </div>
          <div class="container">
          	 <div class="row">
         		<div class="col-md-6 offset-md-3">
         		<div class="card">
         			<div class="card-header text-center">All Info submitted on <kbd>{{$singledata->created_at}}</kbd></div>
         				<div class="card-body">
         					<h6>Bank Name <kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->bankname}}</kbd></h6>
         					<h6>Branch Name <kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->branchname}}</kbd></h6>
         					<h6>Ticket Id<kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->ticketid}}</kbd></h6>

         					 @if(!$singledata->ticketsolved == null)
							<h6>Ticket Solved<kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->ticketsolved}}</kbd></h6>
							@endif
						
       				
         					@if(!$singledata->notsolved == null)
							<h6>Ticket Not Solved<kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->notsolved}}</kbd></h6>
							@endif

							@if(!$singledata->reason == null)
         					<h6>Reason<kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->reason}}</kbd></h6>
         					@endif

         					<h6>Work Done <kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->workdone}}</kbd></h6>
         					<h6>Description of Work Done <kbd class="text-right" style="font-size:15px; float: right;">{{$singledata->description}}</kbd></h6>	

         							
         				</div>
         			</div>
         			<div class="text-center my-3">
         						<a href="{{url('adc/')}}" class="btn btn-info" style="color: white;">Back</a>
         				</div>	
         		</div>
         	</div>
         </div>
       </div>
      

</body>
</html>
