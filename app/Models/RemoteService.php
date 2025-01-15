<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemoteService extends Model
{
    use HasFactory;
    protected $table = 'remote_service';

    protected $fillable = [
        'details',
        'imgOne',
        'imgTwo',
        'imgThree',
        'imgFour',
    ];

    public $timestamps = true;
}

