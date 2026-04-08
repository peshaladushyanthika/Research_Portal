<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    public function group()
{
    return $this->belongsTo(Group::class);
}
}
