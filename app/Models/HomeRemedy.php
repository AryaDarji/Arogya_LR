<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeRemedy extends Model
{
    protected $fillable = [
        'title',
        'description',
        'usage',
        'prakruti'
    ];
}
