<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable =  array('name');
    public function posts(){
    	return $this->hasMany('post');
    }
}
