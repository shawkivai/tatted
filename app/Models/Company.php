<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'state_id',
        'postcode_id',
        'suburb_id',
        'service_type',
        'phone_no',
    ];


    protected $primaryKey = 'company_id';

}
