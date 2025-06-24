<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class PostsReactions extends Model
{
    use HasFactory;

    protected $fillable = [
       'posts_id','reactions_id','users_id'
    ];
    protected $table = 'tbl_posts_reactions';

    public function posts(){
        return $this->belongsTo(Post::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function reactions()
    {
        return $this->belongsTo(Reactions::class);
    }

    public function get_users_post_reaction($usersId, $postId, $reactionId){
        return self::where([['posts_id','=',$postId], ['reactions_id','=',$reactionId], ['users_id','=',$usersId]]);
    }
}
