<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternalUser extends Model
{
    protected $fillable = [
        'username',
        'email_address',
        'first_name',
        'surname'
    ];
}
