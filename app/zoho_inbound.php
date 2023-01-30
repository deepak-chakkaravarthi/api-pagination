<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zoho_inbound extends Model
{
    // use HasFactory;
    protected $table = 'zoho_inbound';
    protected $fillable = [
        'id',
        'api_name',
        'input',
        'response',
        'datetime',
    ];
}
