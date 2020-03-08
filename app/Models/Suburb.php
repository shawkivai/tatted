<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    protected $table = 'suburbs';
    
    protected $fillable = [
        'state_id',
        'postcode_id',
        'suburb_name',
    ];
}