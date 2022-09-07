<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use Illuminate\Database\Eloquent\SoftDeletes;
    protected $fillable = [
        'name', 'email', 'password',
    ];
    
}
