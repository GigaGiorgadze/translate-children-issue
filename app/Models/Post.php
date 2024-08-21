<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $translatable = ['title', 'subtitle', 'description'];

    public $casts = [
        'title' => 'array',
        'subtitle' => 'array',
        'description' => 'array',
    ];
}
