<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'heading_en',
        'heading_de',
        'content_en',
        'content_de',
        'tags'
    ];

    protected $casts = [
        'tags' => 'array'
    ];
}
