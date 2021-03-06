<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = ['name', 'birthday', 'email', 'password'];
    protected $hidden = ['password'];

    public function books() {
        return $this->hasMany(Book::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
