<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about'; // The name of the table in your database

    protected $fillable = [
        'mission',
        'vision',
        'rightImg',
        'leftImg',
        'status', // You can set 1 or 0 for active/inactive status
    ];

    public $timestamps = true;
}
