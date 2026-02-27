@extends('layouts.app')
@section('title')
{{$website->name}}
@endsection
@section('content') 

    <!-- 
    =============================================
        Inner Banner
    ============================================== 
    -->
    <div class="inner-banner-two inner-banner z-1 pt-170 xl-pt-150 md-pt-130 pb-140 xl-pb-100 md-pb-80 position-relative" style="background-image: url({{asset('assets')}}/images/media/img_49.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="mb-45 xl-mb-30 md-mb-20">Blog </h3>
                    <ul class="theme-breadcrumb style-none d-inline-flex align-items-center justify-content-center position-relative z-1 bottom-line">
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li>/</li>
                        <li><a href="#">Pages</a></li>
                        <li>/</li>
                        <li>Blog</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="sub-heading">Over 745,000 listings, apartments, lots and  plots available now!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.inner-banner-two -->

    <!--
		=====================================================
			Blog Section Three
		=====================================================
		-->
		<div class="blog-section-three mt-130 xl-mt-100 mb-150 xl-mb-100">
			<div class="container container-large">
				<div class="row">
                    <div class="col-lg-8">
                        <div class="row gx-xxl-5">
                            @foreach($blogs as $blog)
                            <div class="col-md-6 col-lg-4">
                                <article class="blog-meta-two tran3s position-relative z-1 mb-70 lg-mb-40 wow fadeInUp">
                                    @if($blog->post_image)
                                        <!-- Image Post -->
                                        <figure class="post-img position-relative m0" style="background-image: url({{ asset($blog->post_image) }});">
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                        </figure>
                                    @elseif($blog->post_video || $blog->video_url)
                                        <!-- Video Post -->
                                        <div class="post-img position-relative m0 video-post">
                                            @if($blog->video_thumbnail)
                                                <div class="video-thumbnail" style="background-image: url({{ asset($blog->video_thumbnail) }});">
                                                    <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                                    
                                                    @if($blog->post_video)
                                                        <!-- Uploaded Video -->
                                                        <a href="javascript:void(0)" 
                                                           class="play-btn" 
                                                           onclick="openVideoModal('{{ asset($blog->post_video) }}', 'local')">
                                                            <i class="fa-sharp fa-solid fa-play"></i>
                                                        </a>
                                                    @elseif($blog->video_url)
                                                        <!-- URL Video -->
                                                        <a href="{{ $blog->video_url }}" 
                                                           class="play-btn video-popup" 
                                                           data-autoplay="true" 
                                                           data-vbtype="video">
                                                            <i class="fa-sharp fa-solid fa-play"></i>
                                                        </a>
                                                    @endif
                                                </div>
                                            @else
                                                <figure class="post-img position-relative m0" style="background-image: url({{ asset('assets/images/blog/blog_video_placeholder.jpg') }});">
                                                    <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                                    
                                                    @if($blog->post_video)
                                                        <!-- Uploaded Video -->
                                                        <a href="javascript:void(0)" 
                                                           class="play-btn" 
                                                           onclick="openVideoModal('{{ asset($blog->post_video) }}', 'local')">
                                                            <i class="fa-sharp fa-solid fa-play"></i>
                                                        </a>
                                                    @elseif($blog->video_url)
                                                        <!-- URL Video -->
                                                        <a href="{{ $blog->video_url }}" 
                                                           class="play-btn video-popup" 
                                                           data-autoplay="true" 
                                                           data-vbtype="video">
                                                            <i class="fa-sharp fa-solid fa-play"></i>
                                                        </a>
                                                    @endif
                                                </figure>
                                            @endif
                                        </div>
                                    @else
                                        <!-- Default Placeholder -->
                                        <figure class="post-img position-relative m0" style="background-image: url({{ asset('assets/images/blog/blog_img_01.jpg') }});">
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                        </figure>
                                    @endif
                                    
                                    <div class="post-data">
                                        <div class="post-info">
                                            <a href="{{ route('author.posts', $blog->author->username ?? '') }}">{{ $blog->author->name ?? 'Admin' }}</a> . 
                                            {{ $blog->created_at->diffForHumans() }}
                                            @if($blog->post_video || $blog->video_url)
                                                <span class="video-badge"><i class="fa-sharp fa-solid fa-play me-1"></i> Video</span>
                                            @endif
                                        </div>
                                        <div class="d-flex justify-content-between align-items-sm-center flex-wrap">
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="blog-title">
                                                <h4>{{ Str::limit($blog->title, 40) }}</h4>
                                            </a>
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="btn-four">
                                                <i class="bi bi-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- /.blog-meta-two -->
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Pagination -->
                        <ul class="pagination-one square d-flex align-items-center style-none pt-30">
                            @if ($blogs->onFirstPage())
                                <li class="disabled"><span>Prev</span></li>
                            @else
                                <li><a href="{{ $blogs->previousPageUrl() }}">Prev</a></li>
                            @endif
                            
                            @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                <li class="{{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                    <a href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            
                            @if ($blogs->hasMorePages())
                                <li><a href="{{ $blogs->nextPageUrl() }}">Next</a></li>
                            @else
                                <li class="disabled"><span>Next</span></li>
                            @endif
                            
                            <li class="ms-2">
                                <a href="{{ $blogs->url($blogs->lastPage()) }}" class="d-flex align-items-center">
                                    Last <img src="{{asset('assets/images/icon/icon_46.svg')}}" alt="" class="ms-2">
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4">
						<div class="blog-sidebar dot-bg ms-xxl-5 md-mt-60">
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
                                            <img src="{{asset('assets/images/lazy.svg')}}" 
                                                 data-src="{{ asset($recent->post_image) }}" 
                                                 alt="" 
                                                 class="lazy-img">
                                        @else
                                            <img src="{{asset('assets/images/lazy.svg')}}" 
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
		<!-- /.blog-section-three -->

        <!-- Video Modal for uploaded videos -->
        <div class="modal fade" id="videoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" 
                                class="btn-close btn-close-white position-absolute top-0 end-0 mt-3 me-3" 
                                data-bs-dismiss="modal" 
                                aria-label="Close">
                        </button>
                        <video id="modalVideo" controls class="w-100 rounded-4" style="max-height: 70vh;">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>

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
                lazyImageObserver.unobserve(lazyImage);
            });
        }
    });
    
    // Function to open video modal for uploaded videos
    function openVideoModal(videoSrc, type) {
        if (type === 'local') {
            var modal = new bootstrap.Modal(document.getElementById('videoModal'));
            var video = document.getElementById('modalVideo');
            var source = video.querySelector('source');
            
            source.src = videoSrc;
            video.load();
            
            modal.show();
            
            // Stop video when modal is closed
            document.getElementById('videoModal').addEventListener('hidden.bs.modal', function () {
                video.pause();
                source.src = '';
                video.load();
            });
        }
    }
    
    // Initialize video popup for URL videos if using Venobox or similar
    if (typeof jQuery !== 'undefined' && typeof jQuery.fn.venobox !== 'undefined') {
        $('.video-popup').venobox({
            border: '10px',
            bgcolor: '#000',
            titleattr: 'data-title',
            numeratio: true,
            infinigall: true
        });
    }
</script>
@endpush

@push('styles')
<style>
    /* Video badge style */
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
    
    /* Video thumbnail container */
    .video-thumbnail {
        position: relative;
        width: 100%;
        height: 200px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        overflow: hidden;
    }
    
    /* Play button style */
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ff4a17;
        font-size: 18px;
        transition: all 0.3s ease;
        z-index: 10;
        text-decoration: none;
    }
    
    .play-btn:hover {
        background: #ff4a17;
        color: white;
        transform: translate(-50%, -50%) scale(1.1);
    }
    
    /* Modal styles */
    .modal-content.bg-transparent {
        background: transparent !important;
    }
    
    .btn-close-white {
        filter: invert(1) grayscale(100%) brightness(200%);
        z-index: 1050;
        background-size: 1.5em;
        opacity: 1;
    }
    
    .btn-close-white:hover {
        opacity: 0.8;
    }
    
    /* Ensure post images have proper height */
    .post-img {
        height: 200px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
        overflow: hidden;
    }
    
    /* Date badge style */
    .date {
        position: absolute;
        bottom: 15px;
        left: 15px;
        background: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 600;
        color: #333;
        text-decoration: none;
        z-index: 5;
    }
    
    .date:hover {
        background: #ff4a17;
        color: white;
    } 
</style>
@endpush