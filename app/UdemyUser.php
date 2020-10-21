<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UdemyUser extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
    ];
}
