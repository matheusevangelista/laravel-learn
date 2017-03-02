<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function addComment($body){

        $comment = new Comment();

        $comment->body = $body;
        $comment->post_id = $this->id;

        $comment->save();

    }
}
