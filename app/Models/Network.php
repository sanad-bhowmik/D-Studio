<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;
    protected $table = 'network';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'details',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
