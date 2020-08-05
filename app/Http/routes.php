<?php

use App\Article;

Route::get('/', function () {
    echo Article::find(3)->likes;
});
