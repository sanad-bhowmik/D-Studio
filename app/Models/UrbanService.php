<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrbanService extends Model
{
    use HasFactory;

    // Table name in the database
    protected $table = 'urban_service';

    // Columns that can be mass-assigned
    protected $fillable = [
        'details',
        'imgOne',
        'imgTwo',
        'imgThree',
        'imgFour',
    ];

    // Enable timestamps (created_at, updated_at)
    public $timestamps = true;
}
