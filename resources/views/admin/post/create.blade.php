@extends('admin.master')
@section('title')
    Create New Blog Post
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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                <h5 class="card-title">Add New Blog</h5>
                <hr/>
                <div class="form-body mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{route('admin.posts.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="title" value="{{old('title')}}" class="form-control" id="inputProductTitle" placeholder="Enter Blog title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="inputProductDescription" class="form-label"><h6>Select Category<span class="text-danger">*</span></h6></label>
                                    <select name="category_id" class="form-select form-select-sm" id="small-bootstrap-class-single-field" data-placeholder="Choose one thing">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $key => $category)
                                            <option value="{{$key}}" {{ old('category_id') == $key ? 'selected' : '' }}>{{$category}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Short Description<span class="text-danger">*</span></h6></label>
                                    <textarea class="form-control" name="excerpt" id="inputProductDescription" rows="3" placeholder="Write in 200 Words">{{ old('excerpt') }}</textarea>
                                    @error('excerpt')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- Image Upload -->
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">
                                        <h6>Blog Image <span class="text-muted">(Optional)</span></h6>
                                    </label>
                                    <input class="dropify" type="file" name="post_image" accept="image/*" data-max-file-size="2M">
                                    <small class="text-muted">Accepted formats: JPEG, PNG, JPG, GIF. Max size: 2MB</small>
                                    @error('post_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- Video Upload -->
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label"><h6>Blog Video (Optional)</h6></label>
                                    <input class="form-control" type="file" name="post_video" accept="video/*" id="video-input">
                                    <small class="text-muted">Accepted formats: MP4, MOV, AVI, MKV, WMV. Max size: 50MB</small>
                                    @error('post_video')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- Video Preview -->
                                <div class="mb-3" id="video-preview-container" style="display: none;">
                                    <label class="form-label"><h6>Video Preview</h6></label>
                                    <video id="video-preview" controls style="max-width: 100%; max-height: 300px;">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                                
                                <!-- Video URL (Alternative) -->
                                <div class="mb-3">
                                    <label for="video_url" class="form-label"><h6>Or Video URL (Optional)</h6></label>
                                    <input type="url" name="video_url" value="{{ old('video_url') }}" class="form-control" id="video_url" placeholder="https://youtube.com/watch?v=... or https://vimeo.com/...">
                                    <small class="text-muted">If you prefer to embed a video from YouTube, Vimeo, etc.</small>
                                    @error('video_url')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mb-4">
                                    <label><h6 style="text-decoration: underline wavy orange">Blog Description<span class="text-danger">*</span></h6></label>
                                    <textarea name="body" id="div_editor1">{{ old('body') }}</textarea>
                                    @error('body')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Title<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_title" value="{{ old('post_meta_title') }}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Title Example: How to Start a Blog">
                                    @error('post_meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label"><h6>Blog Meta Tags<span class="text-danger">*</span></h6></label>
                                    <input type="text" name="post_meta_tags" value="{{ old('post_meta_tags') }}" class="form-control" id="inputProductTitle" placeholder="Blog Meta Tags example: keywords research, link building, SEO tools, off-page optimization, local SEO">
                                    @error('post_meta_tags')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Status<span class="text-danger">*</span></h6></label>
                                        <select name="post_status" class="form-select">
                                            <option value="">Choose Status</option>
                                            <option value="1" {{ old('post_status') == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="2" {{ old('post_status') == 2 ? 'selected' : '' }}>Draft</option>
                                        </select>
                                        @error('post_status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputProductDescription" class="form-label"><h6>Select Post Type<span class="text-danger">*</span></h6></label>
                                        <select name="post_type" class="form-select">
                                            <option value="">Post Type</option>
                                            <option value="1" {{ old('post_type') == 1 ? 'selected' : '' }}>Slider Section</option>
                                            <option value="2" {{ old('post_type') == 2 ? 'selected' : '' }}>Featured Section</option>
                                        </select>
                                        @error('post_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-4 pt-3 border-top">
                                    <input type="submit" value="Create Blog" class="btn btn-success px-5 radius-30">
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

@push('styles')
<style>
    #video-preview-container {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 15px;
        background-color: #f8f9fa;
    }
    #video-preview {
        border-radius: 5px;
    }
</style>
@endpush

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
                const validTypes = ['video/mp4', 'video/mov', 'video/avi', 'video/mkv', 'video/wmv', 'video/x-msvideo', 'video/quicktime', 'video/x-matroska', 'video/x-ms-wmv'];
                if (!validTypes.includes(file.type)) {
                    alert('Invalid file type. Please upload a video file (MP4, MOV, AVI, MKV, WMV).');
                    videoInput.value = '';
                    videoPreviewContainer.style.display = 'none';
                    return;
                }
                
                const videoURL = URL.createObjectURL(file);
                videoPreview.src = videoURL;
                videoPreviewContainer.style.display = 'block';
            } else {
                videoPreviewContainer.style.display = 'none';
            }
        });
    }
    
    // Clear video preview when video URL is focused (to avoid confusion)
    const videoUrlInput = document.getElementById('video_url');
    if (videoUrlInput) {
        videoUrlInput.addEventListener('focus', function() {
            if (videoInput && videoInput.files.length > 0) {
                if (confirm('You have selected a video file. If you enter a video URL, the uploaded file will be discarded. Continue?')) {
                    videoInput.value = '';
                    videoPreviewContainer.style.display = 'none';
                }
            }
        });
    }
    
    // Clear video URL when video file is selected
    if (videoInput) {
        videoInput.addEventListener('change', function() {
            if (videoUrlInput && videoUrlInput.value) {
                videoUrlInput.value = '';
            }
        });
    }
});
</script>
@endpush