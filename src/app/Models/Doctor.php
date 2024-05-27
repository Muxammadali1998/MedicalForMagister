<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name_uz',
        'name_ru',
        'body_uz',
        'body_ru',
        'image',
        'job_id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
