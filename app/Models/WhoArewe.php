<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoArewe extends Model
{
    use HasFactory;

    protected $table = 'whoarewe';

    protected $fillable = ['details', 'status'];

    public $timestamps = true;
}
