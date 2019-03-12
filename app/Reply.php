<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

	public function user()
	{
		return $this->belongsTo(User::calss);
	}

	public function question()
	{
		return $this->belongsTo(Question::calss);
	}

	public function like()
	{
		return $this->hasMany(Like::calss);
	}

}
