@extends('layouts.app')
@section('title')
{{$website->name}} - {{ $post->title }}
@endsection
@section('content') 

<!--
		=====================================================
			Blog Details
		=====================================================
		-->
		<div class="blog-details border-top mt-130 xl-mt-100 pt-100 xl-pt-80 mb-150 xl-mb-100">
			<div class="container">
                <div class="row gx-xl-5">
                    <div class="col-lg-8">
                        <div class="blog-post-meta mb-60 lg-mb-40">
                            <div class="post-info">
                                <a href="{{ route('author.posts', $post->author->username ?? '') }}">{{ $post->author->name ?? 'Admin' }}</a> . 
                                {{ $post->created_at->diffForHumans() }}
                                @if($post->post_video || $post->video_url)
                                    <span class="video-badge"><i class="fa-sharp fa-solid fa-play me-1"></i> Video</span>
                                @endif
                            </div>
                            <h3 class="blog-title">{{ $post->title }}</h3>
                        </div>
                    </div>
                </div>
				<div class="row gx-xl-5">
                    <div class="col-lg-8">
                        <article class="blog-post-meta">
                            @if($post->post_image)
                                <!-- Image Post -->
                                <figure class="post-img position-relative m0" style="background-image: url({{ asset($post->post_image) }});">
                                    <div class="fw-500 date d-inline-block">{{ $post->created_at->format('d M') }}</div>
                                </figure>
                            @elseif($post->post_video || $post->video_url)
                                <!-- Video Post -->
                                <div class="post-video-container mb-40">
                                    @if($post->post_video)
                                        <!-- Local Uploaded Video -->
                                        @php
                                            $videoPath = asset($post->post_video);
                                            $extension = strtolower(pathinfo($post->post_video, PATHINFO_EXTENSION));
                                            $videoType = $extension == 'mov' ? 'video/quicktime' : 'video/mp4';
                                        @endphp
                                        <div class="video-wrapper position-relative">
                                            <video id="blogVideo" controls class="w-100 rounded-4" poster="{{ $post->video_thumbnail ? asset($post->video_thumbnail) : '' }}">
                                                <source src="{{ $videoPath }}" type="{{ $videoType }}">
                                                <!-- Add more source formats for better compatibility -->
                                                <source src="{{ $videoPath }}" type="video/mp4">
                                                <source src="{{ $videoPath }}" type="video/quicktime">
                                                <source src="{{ $videoPath }}" type="video/x-m4v">
                                                <source src="{{ $videoPath }}" type="video/mov">
                                                <source src="{{ $videoPath }}" type="video/avi">
                                                <p>
                                                    Your browser doesn't support HTML5 video. 
                                                    <a href="{{ $videoPath }}">Download</a> the video instead.
                                                </p>
                                            </video>
                                            @if(!$post->video_thumbnail)
                                                <div class="video-overlay-icon">
                                                    <i class="fa-sharp fa-solid fa-circle-play"></i>
                                                </div>
                                            @endif
                                        </div>
                                    @elseif($post->video_url)
                                        <!-- URL Video (YouTube/Vimeo/Direct) -->
                                        @php
                                            $videoUrl = $post->video_url;
                                            $isYouTube = strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false;
                                            $isVimeo = strpos($videoUrl, 'vimeo.com') !== false;
                                        @endphp
                                        
                                        @if($isYouTube)
                                            <!-- YouTube Video -->
                                            @php
                                                preg_match('/(youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $videoUrl, $matches);
                                                $videoId = $matches[2] ?? '';
                                            @endphp
                                            @if($videoId)
                                                <div class="video-wrapper">
                                                    <iframe width="100%" height="450" 
                                                            src="https://www.youtube.com/embed/{{ $videoId }}" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                            @endif
                                        @elseif($isVimeo)
                                            <!-- Vimeo Video -->
                                            @php
                                                preg_match('/vimeo\.com\/(\d+)/', $videoUrl, $matches);
                                                $videoId = $matches[1] ?? '';
                                            @endphp
                                            @if($videoId)
                                                <div class="video-wrapper">
                                                    <iframe src="https://player.vimeo.com/video/{{ $videoId }}" 
                                                            width="100%" 
                                                            height="450" 
                                                            frameborder="0" 
                                                            allow="autoplay; fullscreen; picture-in-picture" 
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                            @endif
                                        @else
                                            <!-- Direct Video File URL -->
                                            @php
                                                $extension = strtolower(pathinfo($videoUrl, PATHINFO_EXTENSION));
                                                $videoType = $extension == 'mov' ? 'video/quicktime' : 'video/mp4';
                                            @endphp
                                            <div class="video-wrapper position-relative">
                                                <video controls class="w-100 rounded-4" poster="{{ $post->video_thumbnail ? asset($post->video_thumbnail) : '' }}">
                                                    <source src="{{ $videoUrl }}" type="{{ $videoType }}">
                                                    <source src="{{ $videoUrl }}" type="video/mp4">
                                                    <source src="{{ $videoUrl }}" type="video/quicktime">
                                                    <source src="{{ $videoUrl }}" type="video/x-m4v">
                                                    <source src="{{ $videoUrl }}" type="video/mov">
                                                    <source src="{{ $videoUrl }}" type="video/avi">
                                                    <p>
                                                        Your browser doesn't support HTML5 video. 
                                                        <a href="{{ $videoUrl }}">Download</a> the video instead.
                                                    </p>
                                                </video>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                                
                                <!-- Video Description if available -->
                                @if($post->excerpt)
                                    <div class="video-description mb-30">
                                        <p class="text-muted"><i class="fa-regular fa-circle-play me-2"></i> {{ $post->excerpt }}</p>
                                    </div>
                                @endif
                            @else
                                <!-- Default Placeholder -->
                                <figure class="post-img position-relative m0" style="background-image: url({{ asset('assets/images/blog/blog_img_11.jpg') }});">
                                    <div class="fw-500 date d-inline-block">{{ $post->created_at->format('d M') }}</div>
                                </figure>
                            @endif
                            
                            <div class="post-data pt-50 md-pt-30">
                                {!! $post->body !!}
                            </div>
                            
                            @if($post->tags->count() > 0)
                            <div class="bottom-widget d-sm-flex align-items-center justify-content-between">
                                <ul class="d-flex align-items-center tags style-none pt-20">
                                    <li>Tag:</li>
                                    @foreach($post->tags as $tag)
                                    <li><a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}{{ !$loop->last ? ',' : '' }}</a></li>
                                    @endforeach
                                </ul>
                                <ul class="d-flex share-icon align-items-center style-none pt-20">
                                    <li>Share:</li>
                                    <li><a href="https://wa.me/?text={{ urlencode($post->title) }}%20{{ url()->current() }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ url()->current() }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ url()->current() }}&title={{ urlencode($post->title) }}" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            @endif
                        </article>
                        <!-- /.blog-meta-three -->
                        
                        @if($post->comments->count() > 0)
                        <div class="blog-comment-area">
                            <h3 class="blog-inner-title pb-35">{{ $post->comments->count() }} {{ Str::plural('Comment', $post->comments->count()) }}</h3>
                            
                            @foreach($post->comments as $comment)
                            <div class="comment position-relative d-flex {{ $comment->parent_id ? 'reply-comment' : '' }}">
                                <img src="{{ asset('assets/images/lazy.svg') }}" 
                                     data-src="{{ $comment->user->avatar ?? asset('assets/images/blog/avatar_01.jpg') }}" 
                                     alt="" 
                                     class="lazy-img user-avatar rounded-circle">
                                <div class="comment-text">
                                    <div class="name fw-500">{{ $comment->user->name ?? 'Anonymous' }}</div>
                                    <div class="date">{{ $comment->created_at->format('d M, Y, g:ia') }}</div>
                                    <p>{{ $comment->content }}</p>
                                    <a href="#" class="reply-btn tran3s" onclick="replyToComment({{ $comment->id }})">Reply</a>
                                    
                                    @if($comment->replies->count() > 0)
                                        @foreach($comment->replies as $reply)
                                        <div class="comment position-relative reply-comment d-flex">
                                            <img src="{{ asset('assets/images/lazy.svg') }}" 
                                                 data-src="{{ $reply->user->avatar ?? asset('assets/images/blog/avatar_02.jpg') }}" 
                                                 alt="" 
                                                 class="lazy-img user-avatar rounded-circle">
                                            <div class="comment-text">
                                                <div class="name fw-500">{{ $reply->user->name ?? 'Anonymous' }}</div>
                                                <div class="date">{{ $reply->created_at->format('d M, Y, g:ia') }}</div>
                                                <p>{{ $reply->content }}</p>
                                                <a href="#" class="reply-btn tran3s" onclick="replyToComment({{ $comment->id }})">Reply</a>
                                            </div> <!-- /.comment-text -->
                                        </div> <!-- /.comment -->
                                        @endforeach
                                    @endif
                                </div> <!-- /.comment-text -->
                            </div> <!-- /.comment -->
                            @endforeach
                        </div>
                        <!-- /.blog-comment-area -->
                        @endif
                        
						<div class="blog-comment-form">
							<h3 class="blog-inner-title">Leave A Comment</h3>
							@auth
                                <p>Post your comment as <strong>{{ auth()->user()->name }}</strong></p>
                                <form action="{{ route('blog.comment', $post->id) }}" method="POST" class="mt-30">
                                    @csrf
                                    <input type="hidden" name="parent_id" id="parent_id" value="">
                                    <div class="input-wrapper mb-30">
                                        <label>Comment*</label>
                                        <textarea name="content" placeholder="Your Comment" required></textarea>
                                    </div> <!-- /.input-wrapper -->
                                    <button type="submit" class="btn-five rounded-0">Post Comment</button>
                                </form>
                            @else
                                <p><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="text-decoration-underline fw-500">Sign in</a> to post your comment or <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" class="text-decoration-underline fw-500">signup</a> if you don't have any account.</p>
                            @endauth
						</div>
						<!-- /.blog-comment-form -->
                    </div>
                    
                    <div class="col-lg-4">
						<div class="blog-sidebar dot-bg ms-xxl-4 md-mt-60">
							<div class="search-form bg-white mb-30">
                                <form action="{{ route('blog.search') }}" method="GET" class="position-relative">
                                    <input type="text" name="query" placeholder="Search..." value="{{ request('query') }}">
                                    <button type="submit"><i class="fa-sharp fa-regular fa-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <!-- /.search-form -->

							<div class="categories bg-white bg-wrapper mb-30">
								<h5 class="mb-20">Category</h5>
								<ul class="style-none">
                                    @foreach($cates as $category)
                                    <li>
                                        <a href="{{ route('blog.category', $category->slug) }}">
                                            {{ $category->name }} ({{ $category->posts_count }})
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
							</div>
							<!-- /.categories -->

							<div class="recent-news bg-white bg-wrapper mb-30">
								<h5 class="mb-20">Recent News</h5>
                                @foreach($recent_posts as $recent)
								<div class="news-block d-flex align-items-center pb-25">
                                    <div>
                                        @if($recent->post_image)
                                            <img src="{{ asset('assets/images/lazy.svg') }}" 
                                                 data-src="{{ asset($recent->post_image) }}" 
                                                 alt="" 
                                                 class="lazy-img">
                                        @elseif($recent->video_thumbnail)
                                            <img src="{{ asset('assets/images/lazy.svg') }}" 
                                                 data-src="{{ asset($recent->video_thumbnail) }}" 
                                                 alt="" 
                                                 class="lazy-img">
                                        @else
                                            <img src="{{ asset('assets/images/lazy.svg') }}" 
                                                 data-src="{{ asset('assets/images/blog/blog_img_08.jpg') }}" 
                                                 alt="" 
                                                 class="lazy-img">
                                        @endif
                                        @if($recent->post_video || $recent->video_url)
                                            <span class="small-video-icon"><i class="fa-sharp fa-solid fa-play"></i></span>
                                        @endif
                                    </div>
                                    <div class="post ps-4">
                                        <h4 class="mb-5">
                                            <a href="{{ route('blog.details', $recent->slug) }}" class="title tran3s">
                                                {{ Str::limit($recent->title, 30) }}
                                            </a>
                                        </h4>
                                        <div class="date">{{ $recent->created_at->format('d F, Y') }}</div>
                                    </div>
                                </div>
                                @endforeach
							</div>
							<!-- /.recent-news -->
                            
                            <div class="keyword bg-white bg-wrapper">
								<h5 class="mb-20">Keywords</h5>
								<ul class="style-none d-flex flex-wrap">
                                    @foreach($tags as $tag)
                                    <li><a href="{{ route('blog.tag', $tag->slug) }}">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
							</div>
							<!-- /.keyword -->
						</div>
						<!-- /.theme-sidebar-one -->
					</div>
                </div>
			</div>
		</div>
		<!-- /.blog-details -->

		<!--
		=====================================================
			Fancy Banner Two
		=====================================================
		-->
		<div class="fancy-banner-two position-relative z-1 pt-90 lg-pt-50 pb-90 lg-pb-50">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="title-one text-center text-lg-start md-mb-40 pe-xl-5">
							<h3 class="text-white m0">Start your <span>Journey<img src="{{ asset('assets/images/lazy.svg') }}" data-src="{{ asset('assets/images/shape/title_shape_06.svg') }}" alt="" class="lazy-img"></span> As a Retailer.</h3>
						</div>
						<!-- /.title-one -->
					</div>
					<div class="col-lg-6">
						<div class="form-wrapper me-auto ms-auto me-lg-0">
							<form action="#">
								<input type="email" placeholder="Email address" class="rounded-0">
								<button class="rounded-0">Get Started</button>
							</form>
							<div class="fs-16 mt-10 text-white">Already a Agent? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Sign in.</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-two -->

@endsection

@push('styles')
<style>
    /* Video Badge */
    .video-badge {
        display: inline-block;
        background: #ff4a17;
        color: white;
        font-size: 0.7rem;
        padding: 2px 8px;
        border-radius: 15px;
        margin-left: 8px;
        vertical-align: middle;
    }
    
    /* Video Wrapper */
    .video-wrapper {
        position: relative;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        background: #000;
    }
    
    .video-wrapper video,
    .video-wrapper iframe {
        display: block;
        width: 100%;
        height: auto;
        min-height: 450px;
        object-fit: cover;
    }
    
    /* Video Overlay Icon */
    .video-overlay-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: rgba(255, 255, 255, 0.8);
        font-size: 80px;
        pointer-events: none;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }
    
    /* Small Video Icon for Recent Posts */
    .small-video-icon {
        position: absolute;
        bottom: 5px;
        right: 5px;
        background: rgba(255, 74, 23, 0.9);
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
    }
    
    /* Post Image */
    .post-img {
        height: 450px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        overflow: hidden;
    }
    
    /* Date Badge */
    .date {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: white;
        padding: 8px 20px;
        border-radius: 30px;
        font-weight: 600;
        color: #333;
    }
    
    /* Video Description */
    .video-description {
        background: #f8f9fa;
        padding: 15px 20px;
        border-radius: 8px;
        border-left: 4px solid #ff4a17;
    }
    
    /* Recent News Block */
    .news-block {
        position: relative;
    }
    
    .news-block > div:first-child {
        position: relative;
        width: 80px;
        height: 80px;
        flex-shrink: 0;
    }
    
    .news-block img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 8px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .post-img,
        .video-wrapper video,
        .video-wrapper iframe {
            height: 300px;
            min-height: 300px;
        }
        
        .video-overlay-icon {
            font-size: 50px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Lazy load images
    document.addEventListener("DOMContentLoaded", function() {
        var lazyImages = [].slice.call(document.querySelectorAll("img.lazy-img"));
        
        if ("IntersectionObserver" in window) {
            let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        let lazyImage = entry.target;
                        lazyImage.src = lazyImage.dataset.src;
                        lazyImage.classList.remove("lazy-img");
                        lazyImageObserver.unobserve(lazyImage);
                    }
                });
            });
            
            lazyImages.forEach(function(lazyImage) {
                lazyImageObserver.observe(lazyImage);
            });
        }
    });

    // Reply to comment function
    function replyToComment(commentId) {
        document.getElementById('parent_id').value = commentId;
        document.querySelector('textarea[name="content"]').focus();
    }
    
    // Auto-play/pause video when in viewport (optional)
    document.addEventListener("DOMContentLoaded", function() {
        const video = document.getElementById('blogVideo');
        if (video) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Video is visible - you could auto-play here if desired
                        // video.play();
                    } else {
                        // Video is hidden - pause it
                        video.pause();
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(video);
        }
    });

    // Check video support and show download link if needed
    document.addEventListener("DOMContentLoaded", function() {
        const video = document.getElementById('blogVideo');
        if (video) {
            video.addEventListener('error', function(e) {
                console.log('Video error:', e);
                // Create download link if video fails to play
                const sources = video.getElementsByTagName('source');
                if (sources.length > 0) {
                    const downloadLink = document.createElement('a');
                    downloadLink.href = sources[0].src;
                    downloadLink.className = 'btn-five mt-3';
                    downloadLink.innerHTML = '<i class="fa-sharp fa-solid fa-download me-2"></i>Download Video';
                    downloadLink.download = '';
                    video.parentNode.appendChild(downloadLink);
                }
            });
        }
    });
</script>
@endpush