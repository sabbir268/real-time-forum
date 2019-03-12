<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::calss);
    }

    public function replies()
    {
    	return $this->hasMany(Reply::calss);
    }

    public function category()
    {
    	return $this->belongsTo(Category::calss);
    }
}
