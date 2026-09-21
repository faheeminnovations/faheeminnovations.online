<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'category', 'short', 'details', 'timeline', 'works', 'visible'];

    protected function casts(): array
    {
        return ['visible' => 'boolean'];
    }
}
