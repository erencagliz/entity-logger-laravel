<?php

namespace App\Models;

use App\LogsActivity;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use LogsActivity;

    protected $fillable = ['title', 'content'];
}
