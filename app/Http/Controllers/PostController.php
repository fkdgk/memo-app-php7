<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Config;
use App\Models\Floor;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{

    public function index()
    {
        $posts = Post::latestPosts()->get();
        return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    /* Floorを更新 */
    public function updateFloors($postId,$floors)
    {
        $this -> deleteFloors($postId);
        $this -> storeFloors($postId, $floors);
        return;
    }

    /* Floorを削除 */
    public function deleteFloors($postId)
    {
        $floors = Floor::where('post_id', $postId);
        $floors -> delete();
        return;
    }

    /* Floorを保存 */
    public function storeFloors($postId, $floors)
    {
        /* 階保存 */
         if(!is_array($floors)){
            return;
         }
        
        foreach ($floors as $floor) {
            Floor::create([
                'post_id' => $postId,
                'name' => $floor,
            ]);
        }

        return;
    }

    public function store(PostStoreRequest $request)
    {   

        $name = $request -> name;
        $body = $request -> body;

        /* 記事保存 */
        $post = Post::create([
            'user_id' => Auth::id(),
            'name' => $name,
            'body' => $body,
        ]);
        
        $this -> storeFloors($post->id, $request -> floors);
        session()->flash('alert', ['primary','saved!!',$name]);
        return redirect() -> route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(PostStoreRequest $request, Post $post)
    {
        $name = $request -> name;
        $body = $request -> body;
        $post -> name = $name;
        $post -> body = $body;
        $post -> save();
        $this -> updateFloors($post->id, $request -> floors);
        session()->flash('update', $post -> id);
        return redirect()->route('post.index')->with('alert', ['success','更新しました']);
    }

    public function delete(Post $post)
    {
        $name = $post -> name;
        $post -> delete();
        return redirect()->route('post.index')->with('alert', ['danger','deleted!!',$name]);
    }
}
