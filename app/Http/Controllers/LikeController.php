<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\Reply;

class LikeController extends Controller
{
   
    public function like(Reply $reply , Request $request)
    {
        $reply->like()->create([
            'user_id' => 1
        ]);
    }

  
    public function unlike(Reply $reply , Like $like)
    {
        
        // $reply->like()->where(['user_id',auth()->id()])->first()->delete();
        $reply->like()->where('user_id',1)->first()->delete();
    }
}
