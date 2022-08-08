<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Post extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title','author','short_text','full_text','image'
    ];
}
