<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    protected $fillable = [
        'title_uz',
        'title_ru',
        'body_uz',
        'body_ru'
    ];

    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}
