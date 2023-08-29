<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fids extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'monitor_name',
        'monitor_view',
        'view_desc',
        'clean_condition',
        'condition_desc',
        
    ];
}
