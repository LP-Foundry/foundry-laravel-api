<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalUser extends Model
{
    protected $fillable = [
        'id',
        'source'
    ];
}
