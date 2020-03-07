<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    
    private $fillable= [
        'state_name', 'state_code'
    ]

}
