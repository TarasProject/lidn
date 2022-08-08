<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attributes';
    protected $fillable = [
        'name_attr',
    ];
    public function projects(){
        return $this->hasOne(Project::class,'attr_id');
    }
}
