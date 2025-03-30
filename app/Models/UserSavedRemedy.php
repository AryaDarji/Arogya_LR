<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserSavedRemedy extends Model
{
    protected $fillable = [
        'user_id',
        'remedy_id',
        'status',
        'notes',
    ];
}
