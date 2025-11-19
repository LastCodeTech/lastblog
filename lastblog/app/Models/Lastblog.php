<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lastblog extends Model
{
    protected $fillable=[
        'title',
        'category',
        'user_id',
        'content'
    ];
}
