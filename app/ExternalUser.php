<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExternalUser extends Model
{
    protected $fillable = [
        'id',
        'source'
    ];
}
