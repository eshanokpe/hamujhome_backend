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
                                        <figure class="post-img position-relative m0" style="background-image: url({{ asset('storage/'.$blog->post_image) }});">
                                            <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                        </figure>
                                    @elseif($blog->post_video || $blog->video_url)
                                        <!-- Video Post -->
                                        <div class="post-img position-relative m0 video-post">
                                            @if($blog->video_thumbnail)
                                                <div class="video-thumbnail" style="background-image: url({{ asset('storage/'.$blog->video_thumbnail) }});">
                                                    <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                                    <a href="{{ $blog->video_url ?? '#' }}" class="play-btn video-popup" data-autoplay="true" data-vbtype="video">
                                                        <i class="fa-sharp fa-solid fa-play"></i>
                                                    </a>
                                                </div>
                                            @else
                                                <figure class="post-img position-relative m0" style="background-image: url({{ asset('assets/images/blog/blog_video_placeholder.jpg') }});">
                                                    <a href="{{ route('blog.details', $blog->slug) }}" class="date">{{ $blog->created_at->format('d M') }}</a>
                                                    <a href="{{ $blog->video_url ?? '#' }}" class="play-btn video-popup" data-autoplay="true" data-vbtype="video">
                                                        <i class="fa-sharp fa-solid fa-play"></i>
                                                    </a>
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
                                                 data-src="{{ asset('storage/'.$recent->post_image) }}" 
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
</script>
@endpush