<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ticket;
use App\Report;
use Illuminate\Pagination\Paginator;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()

    {	//counts all tickets in the tickets table

    	$allTickets = ticket::all();
    	$countAllTickets = count($allTickets);

   		//end of counts all tickets in the tickets table

   		//counts all pending tickets in the tickets table
    	$allPendingTickets = DB::table('tickets')
    				         ->where('status', '=', '1')
    				         ->get();
    	$countAllPendingTickets = count($allPendingTickets);
   		//end of counts all pending tickets in the tickets table

    	//closed Tickets
    	$countAllclosedTickets = $countAllTickets - $countAllPendingTickets;

    	//closed Tickets
    	$pendingTickets = DB::table('tickets')
    				->where('status', '=', '1')
    				->OrderBy('id', 'desc')
    				->paginate(5);

    	$closedTickets = DB::table('tickets')
    				->where('status', '=', '0')
    				->OrderBy('id', 'desc')
    				->paginate(5);

    	$tickets = DB::table('tickets')
    				->OrderBy('id', 'desc')
    				->paginate(5);
    	$reports = DB::table('fieldreports')
    				->OrderBy('id', 'desc')
    				->get();



    	$countTickets = count($tickets);
    	$countPendingTickets = count($pendingTickets);
    	$countClosedTickets = count($closedTickets);
    	$countReports = count($reports);
    	return view('Admin.index')
    				->withtickets($tickets)
    				->withcountAllTickets($countAllTickets)
    				->withpendingTickets($pendingTickets)
    				->withcountAllPendingTickets($countAllPendingTickets)
    				->withclosedTickets($closedTickets)
    				->withcountAllclosedTickets($countAllclosedTickets)
    				->withcountReports($countReports);


    }
}
