<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'subtitle', 'author', 'reading_time', 'body', 'category_id'];
    

    public function category()
    {
        return $this->belongsTo('App\Category');

    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
