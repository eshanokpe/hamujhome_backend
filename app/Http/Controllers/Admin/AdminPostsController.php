<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $rules = [
      'title'=>'required|max:255',
      'excerpt'=>'required|max:255',
      'category_id'=>'required',
      'thumbnail'=>'required|file|mimes:jpg,png,webp,svg,jpeg',
      'body'=>'required',
    ];
    public function index()
    {
        return view('admin.post.show',[
            'blogs'=> Post::with('category','image')->latest()->get(),
        ]);
    }


    public function create()
    {

        return view('admin.post.create',[
            'categories'=>Category::pluck('name','id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public $blog;
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts',
            'excerpt' => 'required',
            'body' => 'required',
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Changed from required to nullable
            'post_video' => 'nullable|file|mimes:mp4,mov,avi,mkv,wmv|max:51200',
            'video_url' => 'nullable|url',
            'category_id' => 'required',
        ]);
        
        // Initialize variables
        $postVideoPath = null;
        $postImagePath = null;
        
        // Handle video upload
        if ($request->hasFile('post_video')) {
            $video = $request->file('post_video');
            
            // Generate unique filename
            $videoName = time() . '_' . Str::random(10) . '_' . 
                        Str::slug(pathinfo($video->getClientOriginalName(), PATHINFO_FILENAME)) . 
                        '.' . $video->getClientOriginalExtension();
            
            // Define upload path
            $uploadPath = public_path('uploads/blogs/videos');
            
            // Create directory if it doesn't exist
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            
            // Move video to public/uploads/blogs/videos directory
            $video->move($uploadPath, $videoName);
            
            // Store path relative to public folder
            $postVideoPath = 'uploads/blogs/videos/' . $videoName;
        }
        
        // Handle image upload (optional now)
        if ($request->hasFile('post_image')) {
            $postImagePath = $this->saveImage($request);
        }

        $this->blog = new Post();
        $this->blog->title = $request->title;
        $this->blog->slug = Str::slug($request->title, '-');
        $this->blog->excerpt = $request->excerpt;
        $this->blog->body = $request->body;
        $this->blog->post_image = $postImagePath; // This could be null
        $this->blog->post_video = $postVideoPath;
        $this->blog->video_url = $request->video_url;
        $this->blog->user_id = auth()->id();
        $this->blog->category_id = $request->category_id;
        $this->blog->post_status = $request->post_status;
        $this->blog->post_type = $request->post_type;
        $this->blog->post_meta_tags = $request->post_meta_tags;
        $this->blog->post_meta_title = $request->post_meta_title;
        $this->blog->save();
        
        return redirect()->back()->with('success', 'Blog Created Successfully');
    }

    // Update saveImage method to be safer
    private function saveImage($request)
    {
        if (!$request->hasFile('post_image')) {
            return null;
        }
        
        $image = $request->file('post_image');
        $imageName = rand() . '.' . $image->getClientOriginalExtension();
        $directory = 'uploads/blogs/';
        $imageUrl = $directory . $imageName;
        
        // Ensure directory exists
        if (!file_exists(public_path($directory))) {
            mkdir(public_path($directory), 0777, true);
        }
        
        $image->move(public_path($directory), $imageName);
        return $imageUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit',[
            'blogs'=> Post::with('category','image')->find($id),'categories'=>Category::pluck('name','id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public $post;
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:posts,title,' . $id,
            'excerpt' => 'required',
            'body' => 'required',
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'post_video' => 'nullable|file|mimes:mp4,mov,avi,mkv,wmv|max:51200',
            'video_url' => 'nullable|url',
            'category_id' => 'required',
        ]);
        
        $blog = Post::find($id);
        $postVideoPath = $blog->post_video;
        $postImagePath = $blog->post_image;
        
        // Handle video upload
        if ($request->hasFile('post_video')) {
            // Delete old video if exists
            if ($postVideoPath && file_exists(public_path($postVideoPath))) {
                unlink(public_path($postVideoPath));
            }
            
            $video = $request->file('post_video');
            $videoName = time() . '_' . Str::random(10) . '_' . 
                        Str::slug(pathinfo($video->getClientOriginalName(), PATHINFO_FILENAME)) . 
                        '.' . $video->getClientOriginalExtension();
            
            $uploadPath = public_path('uploads/blogs/videos');
            
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true);
            }
            
            $video->move($uploadPath, $videoName);
            $postVideoPath = 'uploads/blogs/videos/' . $videoName;
        }
        
        // Handle remove video checkbox
        if ($request->has('remove_video') && $request->remove_video == '1') {
            if ($postVideoPath && file_exists(public_path($postVideoPath))) {
                unlink(public_path($postVideoPath));
            }
            $postVideoPath = null;
        }
        
        // Handle image upload
        if ($request->hasFile('post_image')) {
            // Delete old image if exists
            if ($postImagePath && file_exists(public_path($postImagePath))) {
                unlink(public_path($postImagePath));
            }
            
            $postImagePath = $this->saveImage($request);
        }
        
        // Handle remove image checkbox
        if ($request->has('remove_image') && $request->remove_image == '1') {
            if ($postImagePath && file_exists(public_path($postImagePath))) {
                unlink(public_path($postImagePath));
            }
            $postImagePath = null;
        }
        
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title, '-');
        $blog->excerpt = $request->excerpt;
        $blog->body = $request->body;
        $blog->post_image = $postImagePath;
        $blog->post_video = $postVideoPath;
        $blog->video_url = $request->video_url;
        $blog->category_id = $request->category_id;
        $blog->post_status = $request->post_status;
        $blog->post_type = $request->post_type;
        $blog->post_meta_tags = $request->post_meta_tags;
        $blog->post_meta_title = $request->post_meta_title;
        $blog->save();
        
        return redirect()->route('admin.posts.index')->with('success', 'Blog Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $this->post = Post::find($id);
    
        // Check if post exists
        if (!$this->post) {
            return redirect()->back()->with('error', 'Post not found');
        }
        
        if ($this->post->post_image) {
            if (file_exists($this->post->post_image)) {
                unlink($this->post->post_image);
            }
        }
        
        $this->post->delete();
        
        return redirect()->back()->with('success', 'Blog Deleted Successfully');
    }
}
