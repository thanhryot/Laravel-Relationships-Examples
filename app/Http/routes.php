<?php

use App\Author;

Route::get('/', function () {
    echo Author::find(1)->articles;
});
