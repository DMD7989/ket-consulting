<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'sector',
        'excerpt',
        'content',
        'image',
        'tag_1',
        'tag_2',
        'tag_3',
        'is_featured',
        'is_published',
    ];
}
