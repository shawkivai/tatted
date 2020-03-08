<?php

namespace App\Models;

use App\Models\Suburb;
use App\Models\Postcode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    protected $table = 'states';
    
    protected $fillable = [
        'state_name',
        'state_code'
    ];

    public function postcodes(): HasMany
    {
        return $this->hasMany(Postcode::class, 'state_id', 'id');
    }

    public function suburbs(): HasMany
    {
        return $this->hasMany(Suburb::class, 'state_id', 'id');
    }
}
