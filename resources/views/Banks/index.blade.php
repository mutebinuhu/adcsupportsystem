
@extends('Banks.banklayout')
@section('content')
  <div class="container" style="">
    <div class="row">
      <div class="col-md-3">
      <!--admin-nav-->
        <div class="admin-nav">
          <div class="admin-image text-center my-3" style=""></div>
          <h3 class="text-center border-bottom">{{Auth::User()->name}}</h3>
          <h3 >All Tickets <sup><span class="badge badge-info">0</span></sup></h3>
          <h3 class="admin-pending"><a href="#pending-tickets">Pending </a><sup><span class="badge badge-danger">0</span></sup></h3>
          <h3 class="admin-closed"><a href="#admin-closed">Closed </a><sup><span class="badge badge-success">0</span></sup></h3>
          <h3 class="admin-reports">Field Reports <sup><span class="badge badge-danger">0</span></sup></h3>

        </div>
      <!--end of admin-nav-->
      </div>
      <!--col-md-9-->
      <div class="col-md-9">
        <div class="card my-3 bank-tickets">
          <div class="card-header text-center">Bank Tickets</div>
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <!--pending tickets-->
        <div class="card my-5 pending-tickets" id="pending-tickets">
          <div class="card-header text-center">Pending Tickets</div>
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <!--end of pending tickets-->
        <!--closed tickets-->
        <div class="card my-5 closed-tickets" id="closed-tickets">
          <div class="card-header text-center">Closed Tickets</div>
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
        <!--closed tickets-->
      </div>
      <!--end of col-md-9-->
    </div>
  </div>
@endsection
