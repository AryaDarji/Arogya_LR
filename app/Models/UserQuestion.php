<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $fillables = [
        'type',
        'ui_type',
        'question',
        'options',
        'have_followup',
        'followup_questions',
    ];
}
