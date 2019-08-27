<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\ticket;
use App\Branchvisit;
 use App\Mail\TestMail;


class ticketsController extends Controller

{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
    {
        //counting tickets
      $UserTickets = Auth::User()
                      ->tickets()
                      ->get();
      $countTickets = count($UserTickets);
       //query and counting pending tickets
      $pendingTickets = Auth::User()
                          ->tickets()
                          ->where('status','=')
                          ->get();
      $countPendingTickets = count($pendingTickets);  

      $totalPendingTickets = $countTickets - $countPendingTickets;             

      $tickets = Auth::User()
                  ->tickets()
                  ->orderBy('status', 'desc')
                  ->paginate(5);
          return view('Tickets.index', [
            'tickets' => $tickets, 'countTickets'=>$countTickets, 'pendingTickets'=>$pendingTickets, 
            'totalPendingTickets'=>$totalPendingTickets

        ]);



    }

    public function store(Request $request)
    {
    	$url= uniqid();
    	$user_id = Auth::id();
    	$request->validate([
    		'location' => 'required',
    		'client' => 'required',
    		'description' => 'required',
    		'date' => 'required',
            'title' => 'required',
    		]);

    	$formData = array(

    		'location'=>$request->location,
    		'client'=>$request->client,
    		'description'=>$request->description,
        'title'=>$request->title,
    		'date'=>$request->date,
    		'url'=>$url,
    		'user_id'=>$user_id

    		);

   
       //sending email functionality
   /* $to_name = 'Africa distribution Company';
    $to_email = array('mutebinuhu1@gmail.com', 'mutebinuhu@gmail.com');
    $data = array('name'=>Auth::User()->organisation, "body" =>$request->get('description'). 'the problem occured on '.  $request->get('date').  ' '. $request->get('location') . ' branch' );
    $template= 'emails.collecteddataemail';
    Mail::send($template, $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Ticket');
        $message->from(Auth::User()->email, Auth::User()->organisation);
    });
    */
    

    
     ticket::create($formData);
    	
      return redirect('/tickets')->with('status', 'Ticket sent successfuly');



    }

  
   public function show($url)
  {
      $ticket = ticket::whereurl($url)->firstOrFail();
      return view('Tickets.show')
                ->withticket($ticket);
  }
  public function update($url,  Request $request)

  {
    $ticket = ticket::whereurl($url)->firstOrFail();
    $request->validate([

            'location' => 'required',
            'client' => 'required',
            'description' => 'required',
            'date' => 'required',
            'title' => 'required',

        ]);

        $ticket->title = $request->get('title');
        $ticket->description = $request->get('description');
        $ticket->date = $request->get('date');
        $ticket->client = $request->get('client');
        $ticket->location = $request->get('location');
     if($request->get('status') != null) {
       $ticket->status = 0;
    } else {
       $ticket->status = 1;
    }

    $ticket->save();
    
    return redirect('/tickets')->with('status', 'ticket successfuly updated');
  }
  
  public function storeBranchVisit(Request $request)
  {
    $url = uniqid();
    $user_id = Auth::id();
    $confirmedby = Auth::User()->name;
    $bank = Auth::User()->organisation;
    $request->validate([
      'workdone'=>'required',
      'whovisited'=>'required',
      'branch'=>'required',
      ]) ;

    $formData = array(
      'workdone' => $request->workdone,
      'whovisited' => $request->whovisited,
      'branch' => $request->branch,
      'url' => $url, 
      'confirmedby' => $confirmedby,
      'user_id' => $user_id,
      'bank' => $bank,

      );
    Branchvisit::create($formData);
    return redirect('/tickets')->with('status', 'visit Confirmed');
  }

}


