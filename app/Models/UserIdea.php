<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIdea extends Model
{
    use HasFactory;

    protected $table = 'user_idea';

    protected $fillable = [
        'firstName',
        'lastName',
        'phone',
        'email',
        'image',
        'status',
    ];

    public $timestamps = true;

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
