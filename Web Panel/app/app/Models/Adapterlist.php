<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adapterlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'ip',
        'status_active',
        'status_service',
        'last_checked_at', // اضافه شده
        'ping_status'    // اضافه شده
    ];
}
