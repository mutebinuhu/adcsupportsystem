<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/application.css') }}" rel="stylesheet">
<title>Collect Data</title>
</head>
<body>
        @include('layouts.nav')
          <div class="jumbotron adc-header">
         
            <div class="text-center"><h1 class="adc-welcome-text">Welcome  {{Auth::User()->name}}</h1></div>
            <div class="text-center my-5">
            <button data-toggle="modal" data-target="#myModal" class="btn btn-danger adc-welcome-button" >Report</button>
            <a href="#"   class="btn btn-danger adc-welcome-button" >Visit</a>
            </div>
          </div>
          @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
          @endforeach
            <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-head">
                  @if(session('status'))
                  <div class="text-center btn btn-success data-saved">{{session('status')}}</div>
                  @endif
                    <div class="text-center">Hi {{Auth::User()->name}}</div>
                  </div>
                  <div class="card-body">
                      <div class="card">
                          <div class="card-header card-head plus-icon show-adc-field-data"> 
                              
                              Field Data <i class="fas fa-plus plus-icon">+</i>
                          </div> 
                          <div class="card-body adc-field-data"> 
                              @if($reports->isEmpty())
                              <p>No Data</p>
                              @endif

                              @foreach($reports as $report)
                               <div>
                                  <p>{{$report->created_at}} <a  href = "{{action('fieldDataController@show', $report->url)}}" class="text-right btn btn-primary" style="float: right;">view</a></p>
                               </div>                               
                             @endforeach
                             {{$reports->links()}}
                      </div>
                  </div> 
                </div>
              </div>
            </div>
          </div>
<!--MODAL--><div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <form action="" method="POST">
        @csrf
          <label>Select Bank</label>
          <select name="bankname" class="form-control">
            <option value="stanbic">stanbic</option>
            <option value="hfb">hfb</option>
            <option value="ftb">ftb</option>
            <option value="udb">udb</option>
            <option value="dfcu">dfcu</option>
            <option value="dtb">dtb</option>
          </select>
          <label>Branch</label>
          <input type="text" name="branchname" class="form-control">
          <br>
          <label>What have You worked On ?</label>
          <input type="text" name="workdone" class="form-control">
          <label>Description of work Done</label>
          <textarea type='text' name="description" class="form-control"></textarea>
          <br>
         <label>Ticket Id</label>
          <input type="text" name="ticketid" class="form-control">
          <br>
           <div class="text-center"><label>Ticket Solved</label></div>
          <input type="checkbox" name="ticketsolved" value="yes"  class="form-control text-left solved">
          <br>
           <div class="text-center"><label>Ticket Not Solved</label></div>
          <input type="checkbox" name="notsolved" value="yes"  class="form-control text-left not-solved">
          <br>
          <div class="why-not-solved">
           <br>
          <label>Reason ?</label>
          <textarea type='text' name="reason" class="form-control "></textarea>
          <br>
          </div>
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
<!--End of modal-->
<script src="{{ asset('js/jquerylatest.js') }}" defer></script>
<script src="{{ asset('js/application.js') }}" defer></script>
</body>
</html>