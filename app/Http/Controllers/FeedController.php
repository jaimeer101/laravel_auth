<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\PostsReactions;
use App\Models\Reactions;
use App\Models\PersonalNofications;


class FeedController extends Controller
{
    protected $post;
    protected $reactions;

    public $notifications_list;

    public function __construct(){
        $this->post = new Post();
        $this->reactions = new Reactions();
        // $this->notifications_list = (new PersonalNofications())->get_users_notifications(Auth::user()->id);
    }
    public function index(){
        //echo csrf_token();
        $title = Auth::check() ? "Feed" : "";
        $postCondition = Auth::check() ? [["users_id", "!=", Auth::id()]] : "";
        $postList = $this->post->get_posts_2($postCondition, 10);
        $reactionsList = Reactions::all();
        // echo "<pre>";
        // print_r($postList);
        // echo "</pre>";
        // exit;
        // foreach($postList as $post){
        //     echo "<pre>";
        //     print_r($post->posts_reactions()->where("users_id", Auth::id())->exists());
        //     echo "</pre>";
        // }
        // exit();
        $data["title"] = $title;
        $data["postList"] = $postList;
        $data["reactionsList"] = $reactionsList;
        return view('feeds.index')->with($data);
    }
}
