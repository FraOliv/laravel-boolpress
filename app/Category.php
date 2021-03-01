<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['genre', 'over18'];
    public function articles()
    {
        return $this->hasMany('App\Article');
    } 
}
