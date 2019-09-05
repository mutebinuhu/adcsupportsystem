@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center my-5 ">
                        <a  href="{{url('admin')}}" class="btn btn-default btn-lg border home-button ">ADMIN</a >
                    </div>
                    <div class="text-center my-5">
                        <a href="{{url('adc')}}" class="btn btn-default btn-lg border home-button ">ADC</a>
                    </div>
                     <div class="text-center my-5">
                        <a  href="{{url('tickets')}}" class="btn btn-default btn-lg border home-button ">SEND TICKET</a>
                    </div>


                </div>
                <div class="card-footer text-center">Click And Go</div>
        </div>
    </div>
</div>
@endsection
