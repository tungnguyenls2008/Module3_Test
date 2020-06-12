<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['id', 'name', 'dob', 'gender', 'phone', 'socialID', 'email', 'address', 'group_id'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
