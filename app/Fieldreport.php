<?php

namespace App;
use Illuminate\Pagination\Paginator;

use Illuminate\Database\Eloquent\Model;


class Fieldreport extends Model
{
    //
    protected $fillable = [
    'collectedby',
	'bankname',
	'branchname',
	'workdone',
	'description',
	'ticketid',
	'ticketsolved',
	'user_id',
	 'url',
	 'reason', 
	 'notsolved'
    ] ;
}

