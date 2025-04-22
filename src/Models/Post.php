<?php

namespace Blogify\PostManager\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;
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