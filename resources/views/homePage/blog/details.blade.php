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
                                <figure class="post-img position-relative m0" style="background-image: url({{ asset('storage/'.$post->post_image) }});">
                                    <div class="fw-500 date d-inline-block">{{ $post->created_at->format('d M') }}</div>
                                </figure>
                            @elseif($post->post_video || $post->video_url)
                                <!-- Video Post -->
                                <div class="post-video-container mb-40">
                                    @if($post->video_url)
                                        @if(strpos($post->video_url, 'youtube') !== false || strpos($post->video_url, 'youtu.be') !== false)
                                            <!-- YouTube Video -->
                                            @php
                                                preg_match('/(youtube\.com\/watch\?v=|youtu\.be\/)([^&]+)/', $post->video_url, $matches);
                                                $videoId = $matches[2] ?? '';
                                            @endphp
                                            @if($videoId)
                                                <div class="video-wrapper">
                                                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            @endif
                                        @elseif(strpos($post->video_url, 'vimeo') !== false)
                                            <!-- Vimeo Video -->
                                            @php
                                                preg_match('/vimeo\.com\/(\d+)/', $post->video_url, $matches);
                                                $videoId = $matches[1] ?? '';
                                            @endphp
                                            @if($videoId)
                                                <div class="video-wrapper">
                                                    <iframe src="https://player.vimeo.com/video/{{ $videoId }}" width="100%" height="450" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            @endif
                                        @else
                                            <!-- Direct Video File -->
                                            <video controls width="100%" height="auto" poster="{{ $post->video_thumbnail ? asset('storage/'.$post->video_thumbnail) : '' }}">
                                                <source src="{{ asset('storage/'.$post->video_url) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                    @elseif($post->post_video)
                                        <!-- Local Video File -->
                                        <video controls width="100%" height="auto" poster="{{ $post->video_thumbnail ? asset('storage/'.$post->video_thumbnail) : '' }}">
                                            <source src="{{ asset('storage/'.$post->post_video) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @endif
                                </div>
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
                                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-viber"></i></a></li>
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
                                                 data-src="{{ asset('storage/'.$recent->post_image) }}" 
                                                 alt="" 
                                                 class="lazy-img">
                                        @else
                                            <img src="{{ asset('assets/images/lazy.svg') }}" 
                                                 data-src="{{ asset('assets/images/blog/blog_img_08.jpg') }}" 
                                                 alt="" 
                                                 class="lazy-img">
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
</script>
@endpush