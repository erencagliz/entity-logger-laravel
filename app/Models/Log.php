<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = ['model', 'model_id', 'before', 'after', 'action'];
}
