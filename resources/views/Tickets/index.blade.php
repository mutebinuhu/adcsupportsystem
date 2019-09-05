<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="theme-color" content="#ff6600" />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"

        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"

        crossorigin="anonymous">
</script>

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/latestjquery.js') }}" defer></script>
<script src="{{ asset('js/application.js') }}" defer></script>

    <!--icons-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--icons-->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/application.css') }}" rel="stylesheet">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
  body{
  margin: 0;
  padding: 0;
  background-color: #19273d;
}
</style>
<head>
  <title></title>
</head>
<body style="background-color: ;">
@extends('Tickets.ticketlayout')
@section('content')
  <div class="container" style="">
    <div class="row">
      <div class="col-md-3">
      <!--admin-nav-->
        <div class="ticket-nav">
          <div class="admin-image text-center my-3" style=""></div>
          <h4 class="text-center border-bottom">Hi {{Auth::User()->name}}</h4>
          <h4 >All Tickets <sup><span class="badge badge-info">{{$countTickets}}</span></sup></h4>
          <h4 class="admin-pending"><a href="#pending-tickets">Pending </a><sup><span class="badge badge-danger">{{$totalPendingTickets}}</span></sup></h4>
          <h3 class="admin-closed"><a href="#admin-closed">Closed </a><sup><span class="badge badge-success">{{count($pendingTickets)}}</span></sup></h4>
          <a  href='' title="click this button to send a ticket to  ADC" class="btn btn-primary my-2" data-toggle="modal" data-target="#myModal">Send Ticket</a>
          <a  href='' title="click this button to confirm a visit to {{Auth::User()->organisation}}" class="btn btn-primary my-2" data-toggle="modal" data-target="#branchvisitModal">confirm A visit</a>
           <a  href="{{url('/stanbicbank')}}" class="btn btn-primary my-2">Stanbic Admin</a>

        </div>
      <!--end of admin-nav-->
      </div>
      <!--col-md-9-->
      <div class="col-md-9">
        <div class="card my-3 bank-tickets">
      <div class="card-header text-center"> My Tickets</div>
          <div class="card-body">
                <table class="table table-stripped my-2">
                        @foreach($errors->all() as $error)
                        <p class="alert alert-danger my-1">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                        <button class="status btn btn-success">{{session('status')}}</button>
                         @endif
                        
                         @foreach ($tickets as $ticket)
                           <tr>
                               <td>
                                    @if(!$ticket->status)
                                       <s class="results" >{{ $ticket->title}}</s>
                                      
                                       <br>
                                   @else
                                 <!--shows the ticket no-->     
                                 <div class="text-center"> <span class="text-danger ticket-no">id</span> <sup class="ticket-no">{{$ticket->id}}</sup></div>

                                      <span class="results"> {{ $ticket->title }}</span><br>
                                   @endif

                               </td>
                               <td class="text-right">
                                   @if ($ticket->status)
                                           <a  href = "{{action('ticketsController@show', $ticket->url)}}" class="btn btn-primary" ><span class="">close</span></a>
                                   @endif
                               </td>
                           </tr>
                       @endforeach

                   </table>
                {{$tickets->links()}}

          </div>
        </div>
      </div>
      <!--end of col-md-9-->
    </div>
  </div>
        <!-- Modal for sending ticket-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content send-ticket-modal">
      <div class="modal-body">
        <form action="" method="POST" class="">
        @csrf
          <label>Title</label>
          <input type="text" name="title" class="form-control">
          <label>Branch Location</label>
          <input type="text" name="location" class="form-control">
          <br>
          <label>When did The problem Occur ?</label>
          <input type="date" name="date" class="form-control">
          <label>Description</label>
          <textarea type='text' name="description" class="form-control"></textarea>
          <br>
          <label>Bank Name</label>
          <input type="text" name="client" class="form-control" value="{{Auth::User()->organisation}}" readonly="">     
          <div class="text-center">
            <button class="btn btn-success my-2" type="submit" name="submit">Send</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <!-- end ofModal for sending ticket-->
  <!-- Modal for confirming a visit  ticket-->
 <div id="branchvisitModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content send-ticket-modal">
      <div class="modal-body">
        <form action="tickets/branchvisit" method="POST" >
        @csrf
          <label>Who Visited ??</label>
          <input type="text" name="whovisited" class="form-control">
          <label>Branch </label>
          <input type="text" name="branch" class="form-control">
          <label>Work Done</label>
          <textarea type='text' name="workdone" class="form-control"></textarea>
          <label>Confirmed By</label>
          <input type="text" name="client" class="form-control" value="{{Auth::User()->name}}" readonly="">     
          <div class="text-center">
            <button class="btn btn-success my-2" type="submit" name="submit">Send</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <!-- end ofModal for sending ticket-->

@endsection
