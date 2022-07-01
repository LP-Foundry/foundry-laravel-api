<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalUser extends Model
{
    protected $fillable = [
        'id',
        'username',
        'email_address',
        'first_name',
        'surname'
    ];
}
