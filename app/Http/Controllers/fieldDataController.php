<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\fieldreport;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;




class fieldDataController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {	$reports = Auth::User()
    			 ->Reports()
    			 ->orderBy('id', 'desc')
    			 ->paginate(3);
    	return view('ADC.index', ['reports' =>$reports]);
    				
    }

    public function store(Request $request)
    {
    	$url = uniqid();
    	$user_id = Auth::id();
    	$collectedby = Auth::User()->name;

    	$request->validate([
    	'bankname'=>'required',
    	'branchname'=>'required',
    	'workdone'=>'required',
    	'description'=>'required',
    	'ticketid'=>'required',
    	
    	]);
    	$bank = $request->get('bankname');//for getting the bank name
    	$reason = $request->get('reason');
    	$formdata = array(
    	'bankname'=>$request->bankname,
    	'branchname'=>$request->branchname,
    	'workdone'=>$request->workdone,
    	'description'=>$request->description,
    	'ticketid'=>$request->ticketid,
    	'ticketsolved'=>$request->ticketsolved,
    	'url'=>$url,
    	'user_id'=>$user_id,
    	'reason'=>$reason,
    	'collectedby'=>$collectedby,
		'notsolved'=>$request->notsolved
    	);

    $to_name = 'Africa distribution Company';
    $to_email = array('mutebinuhu1@gmail.com', 'mutebinuhu@gmail.com');
    $data = array('name'=>Auth::User()->name, "body" =>$request->get('workdone') );
    $template= 'emails.collecteddataemail';
    Mail::send($template, $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
                ->subject('Bank Report' );
        $message->from(Auth::User()->email, Auth::User()->name);
    });
    	
  
    	Fieldreport::create($formdata);
    	return redirect ('/adc')->with('status', 'data successfuly saved');
    	
    }

    public function show($url)
    {	
    	$singledata = fieldreport::whereurl($url)->firstOrFail();
    	return view('ADC.show')
    				->withsingledata($singledata);
    }
}
