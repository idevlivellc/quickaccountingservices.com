<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CallToAction extends Model
{
    protected $table = "call_to_action";

    protected $fillable = [
        "post_id",
        "cta_header",
        "cta_body"
    ];
}
