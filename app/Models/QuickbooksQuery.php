<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuickbooksQuery extends Model
{
    protected $table = "quickbooks_query";

    protected $fillable = [
        "name",
        "email",
        "phone",
        "issue",
        "ip_address"
    ];
}
