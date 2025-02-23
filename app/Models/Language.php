<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [
        'name', 
        'code',
        'is_rtl',
        'is_default',
        'sort_order',
        'is_enabled',
        'flag',
        'locale',
        'date_format',
        'time_format',
        'datetime_format',
        'currency'
    ];
}
