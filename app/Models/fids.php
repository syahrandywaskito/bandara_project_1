<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fids extends Model
{
    use HasFactory;
    public $timestamps = true;
    
    protected $table = 'fids';

    protected $fillable = [
        'date',
        'monitor_name',
        'monitor_view',
        'view_desc',
        'clean_condition',
        'condition_desc',
        'created_by',
        'updated_by',
    ];

}