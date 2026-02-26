<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showBlog(Post $blog){
 
        $blog = Post::with('author')->withCount('comments')->find($blog->id);

        $recent_posts = Post::latest()->withCount('comments')->take(5)->get();

        $categories = Category::latest()->withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();

        $tags = Tag::latest()->take(15)->get();
        $person = Admin::find(1);

        return view('homePage.blog.details',[ 
            'post' => $blog,
            'recent_posts' => $recent_posts,
            'cates' => $categories,
            'tags' => $tags,
            'person'=>$person,
        ]);
    }

    public function addComment(Request $request, Post $post)
    {

        $request->validate([
            'the_comment' => 'required|min:10|max:300'
        ]);

        //$attributes['user_id'] = auth()->id();
        $comment= new Comment();
        $comment->the_comment = $request->the_comment;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $post->id;
        $comment->save();
       // $comment = $post->comments()->create($attributes);

        return redirect()->back()->with('success', 'Thanks for your Comment');
    }

    /**
     * Store a new comment
     */
    public function storeComment(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|min:3',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        $comment = $post->comments()->create([
            'user_id' => auth()->id(),
            'content' => $request->content,
            'parent_id' => $request->parent_id,
            'approved' => true // or false if you need moderation
        ]);

        return back()->with('success', 'Thanks for your Comment');
    }
}
