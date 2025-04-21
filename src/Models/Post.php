<?php

namespace Blogify\PostManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'published'
    ];

    protected $casts = [
        'published' => 'boolean',
    ];
}