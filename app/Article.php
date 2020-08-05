<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function node()
    {
        return $this->belongsTo(Node::class);
    }

    public function reports()
    {
        return $this->morphToMany(Report::class, 'reportable');
    }

    public function review()
    {
        return $this->morphOne(Review::class, 'reviewable');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
