<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
