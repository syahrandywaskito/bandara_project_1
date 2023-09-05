<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomputerList extends Model
{
    use HasFactory;

    protected $timestamps = true;

    protected $fillable = [
        'date',
        'computer_name',
        'on_off_conditiom',
        'on_off_desc',
        'uninstalled_app',
        'uninstalled_app_desc',
        'clean_file_status',
        'clean_file_desc',
        'created_by',
        'updated_by',
    ];

}
