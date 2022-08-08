<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use TCG\Voyager\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Project extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'projects';
    protected $fillable = [
        'title','brand','text','image','attr_id'
    ];

    public function  attrId(){
        return $this->hasMany(Attribute::class,'id');
    }

    public function img(){
        return $this->hasMany(Image::class,'project_id');
    }
}
