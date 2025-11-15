<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    protected $fillable = [
        "url",
        "topic",
        "title",
        "description",
        "image",
        "content",
        "category",
        "keywords"
    ];

    public function getRouteKeyName()
    {
        return 'url';
    }
}
