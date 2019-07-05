<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['title','description','pages','author','published','user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
