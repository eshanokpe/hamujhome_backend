<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Get home page data
     */
    public function index()
    {
        try {
            $data = [
                'slider' => Post::with(['category'])
                    ->where('post_status', 1)
                    ->where('post_type', 1)
                    ->latest()
                    ->withCount('comments')
                    ->take(5)
                    ->get()
                    ->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                
                'featured' => Post::with(['category'])
                    ->where('post_status', 1)
                    ->where('post_type', 2)
                    ->latest()
                    ->withCount('comments')
                    ->take(6)
                    ->get()
                    ->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                
                'latest' => Post::with(['category'])
                    ->latest()
                    ->withCount('comments')
                    ->take(10)
                    ->get()
                    ->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                
                'trending' => Post::with(['category'])
                    ->orderBy('created_at', 'asc')
                    ->take(5)
                    ->get()
                    ->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                
                'categories' => Category::latest()
                    ->withCount('posts')
                    ->orderBy('posts_count', 'desc')
                    ->take(10)
                    ->get()
                    ->map(function ($category) {
                        return [
                            'id' => $category->id,
                            'name' => $category->name,
                            'slug' => $category->slug,
                            'posts_count' => $category->posts_count,
                            'created_at' => $category->created_at,
                            'updated_at' => $category->updated_at,
                        ];
                    }),
                
                'tags' => Tag::latest()
                    ->take(15)
                    ->get()
                    ->map(function ($tag) {
                        return [
                            'id' => $tag->id,
                            'name' => $tag->name,
                            'slug' => $tag->slug,
                            'created_at' => $tag->created_at,
                            'updated_at' => $tag->updated_at,
                        ];
                    }),
            ];
            
            return response()->json([
                'success' => true,
                'message' => 'Home data retrieved successfully',
                'data' => $data
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve home data',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Get single post
     */
    public function show($slug)
    {
        try {
            // $post = Post::where('slug', $slug)->firstOrFail();
              \Log::info('API show method called with slug: ' . $slug);
        
            $post = Post::with(['category', 'image', 'tags', 'comments', 'comments.user'])
                ->withCount('comments')
                ->where('slug', $slug) 
                ->first();  // Use first() instead of firstOrFail() for debugging
            
           

            $recentPosts = Post::latest()
                ->withCount('comments')
                ->take(3)
                ->get()
                ->map(function ($post) {
                    return $this->formatPost($post);
                });
            
            $categories = Category::latest()
                ->withCount('posts')
                ->orderBy('posts_count', 'desc')
                ->take(10)
                ->get();
            
            $tags = Tag::latest()
                ->take(15)
                ->get();
            
            $admin = Admin::find(1);
            
            // Generate share URLs
            $shareUrls = [
                'facebook' => $this->generateShareUrl('facebook', $post->slug),
                'twitter' => $this->generateShareUrl('twitter', $post->slug),
                'linkedin' => $this->generateShareUrl('linkedin', $post->slug),
                'telegram' => $this->generateShareUrl('telegram', $post->slug),
                'whatsapp' => $this->generateShareUrl('whatsapp', $post->slug),
                'reddit' => $this->generateShareUrl('reddit', $post->slug),
            ];
                \Log::info('Admin debug:', [
        'admin_id' => $admin->id,
        'admin_image_raw' => $admin->image,
        'admin_image_type' => gettype($admin->image),
        'is_object' => is_object($admin->image),
        'is_string' => is_string($admin->image),
        'admin_attributes' => $admin->getAttributes(), // See all attributes
    ]);

            return response()->json([
                'success' => true,
                'message' => 'Post retrieved successfully',
                'data' => [
                    'post' => $this->formatPostDetail($post),
                    'recent_posts' => $recentPosts,
                    'categories' => $categories,
                    'tags' => $tags,
                    'author' => $admin ? [
                        'id' => $admin->id,
                        'name' => $admin->name,
                        'email' => $admin->email,
                        'bio' => $admin->bio,
                        'avatar' => $admin->image ? asset('storage/' . $admin->image) : null,
                    ] : null,
                    'share_urls' => $shareUrls,
                ]
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Post not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }
    
    /**
     * Get all posts (blogs)
     */
    public function posts(Request $request)
    {
        try {
            $perPage = $request->get('per_page', 10);
            $page = $request->get('page', 1);
            
            $posts = Post::with(['category', 'image'])
                ->latest()
                ->withCount('comments')
                ->paginate($perPage, ['*'], 'page', $page);
            
            $recentPosts = Post::latest()
                ->withCount('comments')
                ->take(5)
                ->get()
                ->map(function ($post) {
                    return $this->formatPost($post);
                });
            
            $categories = Category::latest()
                ->withCount('posts')
                ->orderBy('posts_count', 'desc')
                ->take(10)
                ->get();
            
            $tags = Tag::latest()
                ->take(15)
                ->get();
            
            return response()->json([
                'success' => true,
                'message' => 'Posts retrieved successfully',
                'data' => [
                    'posts' => $posts->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                    'pagination' => [
                        'current_page' => $posts->currentPage(),
                        'last_page' => $posts->lastPage(),
                        'per_page' => $posts->perPage(),
                        'total' => $posts->total(),
                        'has_more_pages' => $posts->hasMorePages(),
                    ],
                    'recent_posts' => $recentPosts,
                    'categories' => $categories,
                    'tags' => $tags,
                ]
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve posts',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Get posts by category
     */
    public function categoryPosts($categoryId)
    {
        try {
            $category = Category::findOrFail($categoryId);
            
            $posts = $category->posts()
                ->with(['category', 'image'])
                ->withCount('comments')
                ->latest()
                ->paginate(12);
            
            $recentPosts = Post::latest()
                ->take(5)
                ->get()
                ->map(function ($post) {
                    return $this->formatPost($post);
                });
            
            $categories = Category::withCount('posts')
                ->orderBy('posts_count', 'desc')
                ->take(10)
                ->get();
            
            $tags = Tag::latest()
                ->take(50)
                ->get();
            
            return response()->json([
                'success' => true,
                'message' => 'Category posts retrieved successfully',
                'data' => [
                    'category' => [
                        'id' => $category->id,
                        'name' => $category->name,
                        'slug' => $category->slug,
                        'description' => $category->description,
                    ],
                    'posts' => $posts->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                    'pagination' => [
                        'current_page' => $posts->currentPage(),
                        'last_page' => $posts->lastPage(),
                        'per_page' => $posts->perPage(),
                        'total' => $posts->total(),
                    ],
                    'recent_posts' => $recentPosts,
                    'categories' => $categories,
                    'tags' => $tags,
                ]
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }
    
    /**
     * Search posts
     */
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'q' => 'required|string|min:2',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }
        
        try {
            $searchTerm = $request->get('q');
            
            $posts = Post::where('title', 'like', '%' . $searchTerm . '%')
                ->orWhere('body', 'like', '%' . $searchTerm . '%')
                ->with(['category', 'image'])
                ->latest()
                ->paginate(9);
            
            return response()->json([
                'success' => true,
                'message' => 'Search results retrieved successfully',
                'data' => [
                    'search_term' => $searchTerm,
                    'posts' => $posts->map(function ($post) {
                        return $this->formatPost($post);
                    }),
                    'pagination' => [
                        'current_page' => $posts->currentPage(),
                        'last_page' => $posts->lastPage(),
                        'per_page' => $posts->perPage(),
                        'total' => $posts->total(),
                        'has_more_pages' => $posts->hasMorePages(),
                    ],
                ]
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Search failed',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Get page by slug
     */
    public function page($slug)
    {
        try {
            $page = Page::where('slug', $slug)->firstOrFail();
            
            return response()->json([
                'success' => true,
                'message' => 'Page retrieved successfully',
                'data' => [
                    'id' => $page->id,
                    'title' => $page->title,
                    'slug' => $page->slug,
                    'content' => $page->content,
                    'meta_title' => $page->meta_title,
                    'meta_description' => $page->meta_description,
                    'is_active' => $page->is_active,
                    'created_at' => $page->created_at,
                    'updated_at' => $page->updated_at,
                ]
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Page not found',
                'error' => $e->getMessage()
            ], 404);
        }
    }
    
    /**
     * Get all categories
     */
    public function categories()
    {
        try {
            $categories = Category::latest()
                ->withCount('posts')
                ->get();
            
            return response()->json([
                'success' => true,
                'message' => 'Categories retrieved successfully',
                'data' => $categories->map(function ($category) {
                    return [
                        'id' => $category->id,
                        'name' => $category->name,
                        'slug' => $category->slug,
                        'description' => $category->description,
                        'posts_count' => $category->posts_count,
                        'created_at' => $category->created_at,
                        'updated_at' => $category->updated_at,
                    ];
                })
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve categories',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Get all tags
     */
    public function tags()
    {
        try {
            $tags = Tag::latest()->get();
            
            return response()->json([
                'success' => true,
                'message' => 'Tags retrieved successfully',
                'data' => $tags->map(function ($tag) {
                    return [
                        'id' => $tag->id,
                        'name' => $tag->name,
                        'slug' => $tag->slug,
                        'created_at' => $tag->created_at,
                        'updated_at' => $tag->updated_at,
                    ];
                })
            ], 200);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve tags',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    
    /**
     * Helper method to format post data
     */
    private function formatPost($post)
    {
        return [
            'id' => $post->id,
            'title' => $post->title,
            'slug' => $post->slug,
            'excerpt' => Str::limit(strip_tags($post->body), 150),
            'body' => $post->body,
            'post_type' => $post->post_type,
            'post_status' => $post->post_status,
            // 'image' => $post->post_image ? asset($post->post_image) : null,
            'image' => $post->post_image ? config('app.url') . '/' . $post->post_image : null,
            // 'image_alt' => $post->post_image ? $post->post_image : null,
            'category' => $post->category ? [
                'id' => $post->category->id,
                'name' => $post->category->name,
                'slug' => $post->category->slug,
            ] : null,
            'comments_count' => $post->comments_count,
            'created_at' => $post->created_at,
            'updated_at' => $post->updated_at,
            'published_at' => $post->created_at->format('F j, Y'),
            'read_time' => $this->calculateReadTime($post->body),
        ];
    }
    
    /**
     * Helper method to format detailed post data
     */
    private function formatPostDetail($post)
    {
        $formatted = $this->formatPost($post);
        
        // Add additional details for single post view
        $formatted['tags'] = $post->tags->map(function ($tag) {
            return [
                'id' => $tag->id,
                'name' => $tag->name,
                'slug' => $tag->slug,
            ];
        });
        
        $formatted['comments'] = $post->comments->map(function ($comment) {
            return [
                'id' => $comment->id,
                'body' => $comment->body,
                'user' => $comment->user ? [
                    'id' => $comment->user->id,
                    'name' => $comment->user->name,
                    'avatar' => $comment->user->image ? asset('storage/' . $comment->user->image->path) : null,
                ] : null,
                'created_at' => $comment->created_at->format('F j, Y'),
            ];
        });
        
        $formatted['meta'] = [
            'title' => $post->meta_title,
            'description' => $post->meta_description,
            'keywords' => $post->meta_keywords,
        ];
        
        return $formatted;
    }
    
    /**
     * Helper method to calculate read time
     */
    private function calculateReadTime($content)
    {
        $wordCount = str_word_count(strip_tags($content));
        $readTime = ceil($wordCount / 200); // 200 words per minute
        return $readTime . ' min read';
    }
    
    /**
     * Helper method to generate share URLs
     */
    private function generateShareUrl($platform, $slug)
    {
        $baseUrl = config('app.url');
        $postUrl = $baseUrl . '/posts/' . $slug;
        
        $urls = [
            'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($postUrl),
            'twitter' => 'https://twitter.com/intent/tweet?url=' . urlencode($postUrl) . '&text=Check%20out%20this%20post',
            'linkedin' => 'https://www.linkedin.com/shareArticle?mini=true&url=' . urlencode($postUrl),
            'telegram' => 'https://t.me/share/url?url=' . urlencode($postUrl),
            'whatsapp' => 'https://api.whatsapp.com/send?text=' . urlencode($postUrl),
            'reddit' => 'https://reddit.com/submit?url=' . urlencode($postUrl),
        ];
        
        return $urls[$platform] ?? $postUrl;
    }
}