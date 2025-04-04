<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserQuestion extends Model
{
    protected $table = "user_questions";
    protected $fillables = [
        'id',
        'type',
        'ui_type',
        'question',
        'options',
        'have_followup',
        'followup_questions',
    ];
}
