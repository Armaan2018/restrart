<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function users()
    {
        return $this -> belongsToMany('App\Models\User');
    }

    
    public function categories()
    {
    	return $this -> belongsToMany('App\Models\Category');
    }

    public function tags()
    {
    	return $this -> belongsToMany('App\Models\Tag');
    }
}
