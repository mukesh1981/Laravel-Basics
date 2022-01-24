<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search_table extends Model
{
    use HasFactory;
    function joinOneToOne()
    {
        return $this->hasOne('App\Models\add_registration');
    }
    function joinOneToMany()
    {
        return $this->hasMany('App\Models\add_registration');
    }
}

