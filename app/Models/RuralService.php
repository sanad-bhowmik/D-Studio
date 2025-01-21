<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuralService extends Model
{
    use HasFactory;
    protected $table = 'rural_service';

    protected $fillable = [
        'details',
        'imgOne',
        'imgTwo',
        'imgThree',
        'imgFour',
    ];

    public $timestamps = true;
}
