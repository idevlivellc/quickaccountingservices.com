<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

# Relation
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    /**
     * Describes the relation between the post and cta
     * @return HasOne
     */
    public function cta(): HasOne
    {
        return $this->hasOne(CallToAction::class);
    }
}
