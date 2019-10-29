<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SecurityPlan extends Model
{
    protected $fillable = ['name', 'description','from','to'];
}
