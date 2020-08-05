<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function reports()
    {
        return $this->morphToMany(Report::class, 'reportable');
    }

    public function review()
    {
        return $this->morphOne(Review::class, 'reviewable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
