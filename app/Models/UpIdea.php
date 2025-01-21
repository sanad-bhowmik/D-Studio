<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpIdea extends Model
{
    use HasFactory;

    protected $table = 'upidea';

    public $timestamps = true;

    protected $fillable = [
        'details',
        'imgOne',
        'imgTwo',
        'imgThree',
        'imgFour'
    ];
}
