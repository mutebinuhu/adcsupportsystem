<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use Illuminate\Http\Request;
use App\Ticket;

class StanbicBankController extends Controller
{
    //
        public function index()
    {	
    	/*$countTickets =  DB::table('tickets')
    					  ->where('client', '=', 'stanbicbank')
    					  ->get();
    	$totalTickets = count($countTickets);//counts the total number of tickets

    	$brancVisits = DB::table('branchvisits')
    					  ->where('bank', '=', 'stanbicbank')
    					  ->get();
    	$totalBrancVisits = count($brancVisits);//counts the total number of branch visits 		  	

    	$PendingTickets =  DB::table('tickets')
    					  ->where('status', '=', '1')
    					  ->get();
    	$countPendingTickets = count($PendingTickets);//counts total number of pending Tickets


    	$closedTickets = $totalTickets - $countPendingTickets; //total number of closed Tickets


    	$stanbicTickets = DB::table('tickets')//returns all tickets for stanbic
    					  ->where('client', '=', 'stanbicbank')
    					  ->orderBy('id', 'desc')
    					  ->paginate(5);*/
    	return view('STANBIC.index');
    				/*->withstanbicTickets($stanbicTickets)
    				->withtotalTickets($totalTickets)
    				->withtotalBrancVisits($totalBrancVisits)
    				->withcountPendingTickets($countPendingTickets)
    				->withclosedTickets($closedTickets);*/




    }

}
