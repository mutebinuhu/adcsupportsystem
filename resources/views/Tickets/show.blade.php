@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row ">
		        <div class="col-md-12">
		            <div class="card">
		                <div class="card-header card-head">Welcome {{Auth::User()->name}}</div>
		                  @foreach($errors->all() as $error)
		                  <p class="alert alert-danger my-1">{{$error}}</p>
		                  @endforeach
		                  @if(session('status'))
		                  <p>{{session('status')}}</p>
		                  @endif
		                <div class="card-body">
		                   <div class="row">
		                       <div class="col text-center home-query-box">
		                            <img src="{!! asset('images/issue.png') !!}" height='200' width="200" class="circle home-image" >
		                       </div>
		                   </div>
		                </div>
		            </div>
		        </div>
		      </div>
		     <div class="row">
		     	<div class="col-md-6 offset-md-3">
		     		<div class="card  my-2">
		     			<div class="card-header">Close  Ticket</div>
		     			<div class="card-body">
		     				<form action="" method="POST">
		     				@method('patch')
						        @csrf
						          <label>Title</label>
						          <input type="text" name="title" class="form-control" value="{{$ticket->title}}">
						          <label>Branch Location</label>
						          <input type="text" name="location" class="form-control" value="{{$ticket->location}}">
						          <br>
						          <label>When did The problem Occur ?</label>
						          <input type="date" name="date" class="form-control" value="{{$ticket->date}}">
						          <label>Description</label>
						          <textarea type='text' name="description" class="form-control" >{{$ticket->description}}</textarea>
						          <br>
						          <label>Bank Name</label>
         			 					<input type="text" name="client" class="form-control" value="{{Auth::User()->organisation}}" readonly="">
						          <label>Close Ticket</label>
						          <input type="checkbox" name="status" class="form-cotrol">
						          <div class="text-center my-3">   
						          	  <button class="btn btn-success" type="submit" name="submit">update</button>
						          </div>
        						</form>
        						
		     			</div>
		     		</div>
		     	</div>
		     </div>
		</div>
@endsection