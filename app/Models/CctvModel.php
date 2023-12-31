<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CctvModel extends Model
{

    
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'date', 
        'hardware_name', 
        'record_status', 
        'record_desc', 
        'clean_status', 
        'clean_desc',
        'created_by',
        'updated_by',
    ];
}
