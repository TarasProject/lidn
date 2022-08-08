<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'blogposts';
    protected $fillable = [
        'title','author','short_text','full_text','image'
    ];
}
