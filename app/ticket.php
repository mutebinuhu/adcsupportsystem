<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    //
    protected $fillable = ['user_id', 'url',  'title', 'client', 'location', 'date', 'description', 'status'];
}
