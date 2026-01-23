@extends('admin.master')
@section('title')
    Edit Blog Post
@endsection
@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Blog</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Blog List</a>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Blog</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.posts.update',['post'=>$blogs->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 
                                <input type="hidden" name="id" value="{{$blogs->id}}">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="title" value="{{$blogs->title}}" class="form-control" id="inputProductTitle">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Select Category<span class="text-danger">*</span></h6></label>
                                    <div class="card">
                                        <div class="card-body">
                                            <select name="category_id" value="{{old("category_id")}}" class="form-select form-select-sm" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing">
                                                <option>Select Category</option>
                                                @foreach($categories as $key => $category)
                                                    <option value="{{$key}}" {{ $blogs->category_id == $key ? 'selected':'' }}>{{$category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Short Description<span class="text-danger">*</span></h6></label>
                                    <textarea class="form-control" name="excerpt" id="inputProductDescription" rows="3">{{$blogs->excerpt}}</textarea>
                                </div>
                                
                                <!-- Image Upload Section -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label"><h6>Blog Image <span class="text-muted">(Optional)</span></h6></label>
                                            <input class="dropify" type="file" name="post_image" accept="image/*" data-default-file="{{ $blogs->post_image ? asset($blogs->post_image) : '' }}">
                                            <small class="text-muted">Leave empty to keep current image</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Current Blog Image</h6></label>
                                        @if($blogs->post_image)
                                            <div>
                                                <img src="{{asset($blogs->post_image)}}" alt="Current Blog Image" class="img-fluid w-50">
                                                <div class="mt-2">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="remove_image" value="1" class="form-check-input">
                                                        Remove Image
                                                    </label>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center p-3 bg-light">
                                                <i class="bx bx-image-alt display-4 text-muted"></i>
                                                <p class="mt-2">No image uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <!-- Video Upload Section -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label"><h6>Blog Video <span class="text-muted">(Optional)</span></h6></label>
                                            <input class="form-control" type="file" name="post_video" accept="video/*" id="video-input">
                                            <small class="text-muted">Accepted formats: MP4, MOV, AVI, MKV, WMV. Max size: 50MB</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Current Video</h6></label>
                                        @if($blogs->post_video)
                                            <div>
                                                <video controls style="max-width: 100%; max-height: 200px;" id="current-video">
                                                    <source src="{{ asset($blogs->post_video) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                                <div class="mt-2">
                                                    <a href="{{ asset($blogs->post_video) }}" target="_blank" class="btn btn-sm btn-info">
                                                        <i class="fas fa-download"></i> Download Video
                                                    </a>
                                                    <label class="form-check-label ms-3">
                                                        <input type="checkbox" name="remove_video" value="1" class="form-check-input">
                                                        Remove Video
                                                    </label>
                                                </div>
                                            </div>
                                        @else
                                            <div class="text-center p-3 bg-light">
                                                <i class="bx bx-video display-4 text-muted"></i>
                                                <p class="mt-2">No video uploaded</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                
                                <!-- Video Preview for New Upload -->
                                <div class="mb-3" id="video-preview-container" style="display: none;">
                                    <label class="form-label"><h6>New Video Preview</h6></label>
                                    <video controls style="max-width: 100%; max-height: 300px;" id="video-preview">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                
                                <!-- Video URL Field -->
                                <div class="mb-3">
                                    <label for="video_url" class="form-label"><h6>Video URL (Optional)</h6></label>
                                    <input type="url" name="video_url" value="{{ $blogs->video_url ?? old('video_url') }}" class="form-control" id="video_url" placeholder="https://youtube.com/watch?v=... or https://vimeo.com/...">
                                    <small class="text-muted">If you prefer to embed a video from YouTube, Vimeo, etc.</small>
                                </div>

                                <div class="form-group">
                                    <label><h6>Blog Description<span class="text-danger">*</span></h6></label>
                                    <textarea id="div_editor1" name="body">{{$blogs->body}}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_title" value="{{$blogs->post_meta_title}}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Title Example: How to Start a Blog">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Tags<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_tags" value="{{$blogs->post_meta_tags}}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Tags example: keywords research, link building, SEO tools, off-page optimization, local SEO">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Status<span class="text-danger">*</span></h6></label>
                                        <select name="post_status" id="" class="form-select">
                                            <option value="">Choose Status</option>
                                            <option value="1" {{ $blogs->post_status == 1 ? 'selected':'' }}>Active</option>
                                            <option value="2" {{ $blogs->post_status == 2 ? 'selected':'' }}>Draft</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Type<span class="text-danger">*</span></h6></label>
                                        <select name="post_type" id="" class="form-select">
                                            <option value="">Post Type</option>
                                            <option value="1" {{ $blogs->post_type == 1 ? 'selected':'' }}>Slider Section</option>
                                            <option value="2" {{ $blogs->post_type == 2 ? 'selected':'' }}>Featured Section</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <input type="submit" value="Update Blog" class="btn btn-success px-5 radius-30">
                                    <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary px-5 radius-30">Cancel</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
// Video preview functionality
document.addEventListener('DOMContentLoaded', function() {
    const videoInput = document.getElementById('video-input');
    const videoPreview = document.getElementById('video-preview');
    const videoPreviewContainer = document.getElementById('video-preview-container');
    
    if (videoInput) {
        videoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            
            if (file) {
                // Check file size (50MB max)
                const maxSize = 50 * 1024 * 1024; // 50MB in bytes
                if (file.size > maxSize) {
                    alert('File size exceeds 50MB limit. Please choose a smaller file.');
                    videoInput.value = '';
                    videoPreviewContainer.style.display = 'none';
                    return;
                }
                
                // Check file type
                const validTypes = ['video/mp4', 'video/mov', 'video/avi', 'video/mkv', 'video/wmv'];
                if (!validTypes.includes(file.type)) {
                    alert('Invalid file type. Please upload a video file (MP4, MOV, AVI, MKV, WMV).');
                    videoInput.value = '';
                    videoPreviewContainer.style.display = 'none';
                    return;
                }
                
                const videoURL = URL.createObjectURL(file);
                videoPreview.src = videoURL;
                videoPreviewContainer.style.display = 'block';
                
                // Hide current video preview when uploading new one
                const currentVideo = document.getElementById('current-video');
                if (currentVideo) {
                    currentVideo.style.display = 'none';
                }
            } else {
                videoPreviewContainer.style.display = 'none';
            }
        });
    }
    
    // Handle remove video checkbox
    const removeVideoCheckbox = document.querySelector('input[name="remove_video"]');
    const currentVideoElement = document.getElementById('current-video');
    
    if (removeVideoCheckbox && currentVideoElement) {
        removeVideoCheckbox.addEventListener('change', function() {
            if (this.checked) {
                currentVideoElement.style.opacity = '0.5';
            } else {
                currentVideoElement.style.opacity = '1';
            }
        });
    }
    
    // Handle remove image checkbox
    const removeImageCheckbox = document.querySelector('input[name="remove_image"]');
    const currentImage = document.querySelector('img[alt="Current Blog Image"]');
    
    if (removeImageCheckbox && currentImage) {
        removeImageCheckbox.addEventListener('change', function() {
            if (this.checked) {
                currentImage.style.opacity = '0.5';
            } else {
                currentImage.style.opacity = '1';
            }
        });
    }
});
</script>
@endpush