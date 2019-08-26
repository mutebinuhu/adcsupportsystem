<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branchvisit extends Model
{
    //
    protected $fillable = ['user_id', 'whovisited', 'workdone',  'confirmedby', 'branch', 'url', 'bank'];
     
}
