<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=['comment', 'positive_rep', 'negative_rep', 'book_id', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function book() {
        return $this->belongsTo(Book::class);
    }
}
