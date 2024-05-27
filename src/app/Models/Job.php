<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title_uz',
        'title_ru',
        'body_uz',
        'body_ru'
    ];
}
