<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Postcode extends Model
{
    protected $table = 'postcodes';

    protected $fillable = [
        'state_id', 'postcode_no'
    ];
    
}