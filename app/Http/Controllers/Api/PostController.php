<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\PostsReactions;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy("created_at","desc")->paginate(10);
        return (new PostCollection($posts))->response();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required'
        ]);
        $title = "POST_";
        $lastPost = Post::where("users_id", Auth::user()->id)->orderBy("created_at","desc")->first();
        $title .= ($lastPost->id + 1)."-".date("YmdHis");
        
        $post = new Post();

        $post->title = $title;
        $post->description = $request->input('description');
        $post->users_id = Auth::user()->id;
        $post->save();

        Log::info("Post ID {$post->id} created successfully.");

        return (new PostResource($post))->response();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return (new PostResource($post))->response();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        Log::info("Post ID {$post->id} updated successfully.");
        return (new PostResource($post))->response();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        Log::info("POST ID {$post->id} deleted successfully.");

        return response(null, Response::HTTP_NO_CONTENT);
    }

    // React to a Post
    public function react(Request $request){
        $response = "";
        $request->validate([
            'hdn_post_id' => 'required',
            'reaction' => 'required'
        ]);
        $postId = $request->input('hdn_post_id');
        $reactionId = $request->input('reaction');
        $chekUsersReaction = (new PostsReactions())->get_users_post_reaction(Auth::user()->id, $postId, $reactionId);
        if($chekUsersReaction->count() > 0){
            $postReactionDetails = $chekUsersReaction->first();
            $chekUsersReaction->delete();
            Log::info("POST REACTION ID {$postReactionDetails->id} removed successfully.| Reaction: ".$reactionId."|Post: ".$postId."|User: ".$postReactionDetails->users_id);
            $response = response(null, Response::HTTP_NO_CONTENT);
        }
        else{
            
        }
    }
}
