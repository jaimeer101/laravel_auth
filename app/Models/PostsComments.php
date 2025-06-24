<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PostsComments extends Model
{
    use HasFactory;

    protected $table = 'tbl_posts_comments';

    public function posts(){
        return $this->belongsTo(Post::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
