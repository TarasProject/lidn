<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Image extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'images';
    protected $fillable = [
        'name_img',
        'project_id',
    ];

    public function projectid(){
        return $this->hasOne(Project::class,'id');
    }
}
