<?php

namespace App\Helpers;

use Illuminate\Support\Str;

if (!function_exists('getPostImage')) {
    function getPostImage($post)
    {
        if (!empty($post->post_image)) {
            // Check if it's a full URL or just a path
            if (filter_var($post->post_image, FILTER_VALIDATE_URL)) {
                return $post->post_image;
            }
            return asset('storage/' . ltrim($post->post_image, '/'));
        } elseif (!empty($post->video_thumbnail)) {
            return asset('storage/' . ltrim($post->video_thumbnail, '/'));
        } elseif (!empty($post->post_video)) {
            // You might want a default video placeholder
            return asset('assets/images/blog/video-placeholder.jpg');
        } else {
            // Default placeholder
            return asset('assets/images/blog/default-blog.jpg');
        }
    }
}