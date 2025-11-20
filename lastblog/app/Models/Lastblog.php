<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lastblog extends Model
{
    protected $fillable=[
        'title',
        'categories_id',
        'user_id',
        'content'
    ];
    
    public function category(){
       return $this->belongsTo(Categories::class,'categories_id');
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
