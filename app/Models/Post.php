<?php

namespace App\Models;
use DateTime;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
       'title','description','users_id'
    ];
    protected $table = 'tbl_posts';

    protected $appends = ['display_date'];
    public function users() {
        return $this->hasOne(User::class,'id','users_id');
    }

    public function posts_reactions() {
        return $this->hasMany(PostsReactions::class,'posts_id','id');
    }

    public function posts_comments() {
        return $this->hasMany(PostsComments::class,'posts_id','id');
    }

    public function getDisplayDateAttribute() {
        $response = $this->created_at;
        if(date("Y-m-d") == date("Y-m-d", strtotime($response))) {
            $dateNow = new DateTime(date("Y-m-d H:i:s"));
            $dateCreated = new DateTime(date("Y-m-d H:i:s", strtotime($this->created_at)));
            $interval = $dateCreated->diff($dateNow);
            $response = $interval->h ." hour".($interval->h > 1 ? "s" : "")." ago";
        }
        return $response;
    }
    public function get_posts_2($condition = null, $limit = null, $offset = null) {
        $userId = "";
        $response = self::withCount([
            'posts_reactions as like_count' => function ($query) {
                $query->where('reactions_id', '1');
            },
            'posts_reactions as dislike_count' => function ($query) {
                $query->where('reactions_id', '2');
            }, 'posts_comments as comments_count'
        ]);
        if($condition){
            $response->where($condition);
        }
        if($limit){
            $response->limit($limit);
        }
        if($offset){
            $response->offset($offset);
        }
        $response->orderBy('created_at','desc');
        //echo $response->toRawSql();
        return $response->get();
    }
    public function get_posts($condition = null, $limit = null, $offset = null){
        $query = DB::table("tbl_posts as p"); 
        $query->select("p.id", 
                        "p.title", 
                        "p.description", 
                        "p.created_at", 
                        "p.updated_at", 
                        DB::raw("IF(DATE_FORMAT(p.created_at, '%Y-%m-%d') = CURDATE(),
                                    CONCAT(TIMESTAMPDIFF(HOUR, p.created_at, NOW()),
                                            IF(TIMESTAMPDIFF(HOUR, p.created_at, NOW()) > 1,
                                                ' hours ',
                                                ' hour '),
                                            'ago'),
                                    p.created_at) AS display_create"),
                        "u.id AS users_id", 
                        "u.name", 
                        "u.email");
        $query->join("users as u","p.users_id","=","u.id");
        if($condition){
            $query->where($condition);
        }
        if($limit){
            $query->limit($limit);
        }
        if($offset){
            $query->offset($offset);
        }
        //echo $query->toRawSql();
        $response = $query->get();
        return $response;
    }
}
