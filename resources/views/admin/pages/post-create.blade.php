@push("header-section")
<title>Softwala | New Blog Create</title>
@endpush

@extends("admin.app")
@section("content")
<!-- Include navigation section -->
@include("admin.layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="container">
        <div class="row my-5">
            @if(Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success! </strong> {{Session::get('success')}}
                </div>
            @elseif(Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error! </strong> {{Session::get('error')}}
                </div>
            @endif

            @isset($post)
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Update Post</h1>
            </div>
            <div class="col-12">
                <form action="{{url()->full()}}" method="post" enctype="multipart/form-data"> @csrf

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Upload Thumbnail (optional)
                        </label>

                        <div class="card post_thumbnail_box">
                            <div class="position-absolute">
                                <button
                                    type="button"
                                    title="Upload post thumbnail image."
                                    onclick="post_thumbnail.click();"
                                    class="btn btn-sm btn-theme btn-floating">
                                    <i class="fas fa-upload"></i>
                                </button>
                                <button
                                    type="button"
                                    id="remove_thumbnail"
                                    title="Remove post thumbnail image."
                                    class="btn btn-sm btn-theme2 btn-floating">
                                    <i class="fas fa-close"></i>
                                </button>
                            </div>
                            <input
                                type="file"
                                accept="image/jpg, image/png, image/jpeg"
                                name="post_thumbnail"
                                id="post_thumbnail"
                                style="height: 0px; width:0px;"
                            />
                            <input type="hidden" name="post_thumbnail_status" id="post_thumbnail_status" value="1" />
                            @if($post->thumbnail)
                            <img src="{{ asset('assets/images/blog/'.$post->thumbnail)}}" height="100%" width="100%" id="post_thumbnail_imgtag" />
                            @else
                            <img height="100%" width="100%" id="post_thumbnail_imgtag" />
                            @endif

                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Title  <strong class="text-danger">*</strong>
                        </label>
                        <input
                            type="text"
                            class="form-control slug-genrate"
                            name="post_title"
                            value="{{ old("post_title") ?? $post->title }}"
                            placeholder="Enter Post title"
                            required
                        />
                        <div class="form-text text-danger">
                            @error('post_title'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Slug  <strong class="text-danger">*</strong>
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            name="post_slug"
                            id="post_slug"
                            value="{{ old("post_slug") ?? $post->slug }}"
                            placeholder="Enter Post slug"
                            required
                        />
                        <div class="form-text text-danger" id="post_slug_error">
                            @error('post_slug'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Category  <strong class="text-danger">*</strong>
                        </label>
                        <select class="form-select" name="post_category" required>
                            <option value="">Select post category</option>
                            @foreach ($categorys as $category)
                            <option
                            value="{{ $category->catid }}"
                            @selected($post->category == $category->catid)
                            >{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-text text-danger">
                            @error('post_category'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Meta Keyword  <strong class="text-danger">*</strong>
                        </label>
                            <input
                                type="text"
                                class="form-control"
                                name="post_meta_keyword"
                                value="{{ old("post_meta_keyword") ?? $post->metakeyword }}"
                                placeholder="Enter keyword separate with commas."
                                required
                            />
                        <div class="form-text text-danger">
                            @error('post_meta_keyword'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Meta Description <strong class="text-danger">*</strong>
                        </label>

                            <textarea
                                type="text"
                                class="form-control"
                                name="post_meta_description"
                                id="post_meta_description"
                                placeholder="Write short description in 250 word"
                                required
                            >{{ old("post_meta_description") ?? $post->metadescription }}</textarea>

                        <div class="form-text text-danger">
                            @error('post_meta_description'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Tutorial URL
                        </label>
                            <input
                                type="url"
                                class="form-control"
                                name="video_url"
                                value="{{ old("video_url") ?? $post->videourl }}"
                                placeholder="Enter tutorial video URL"
                            />
                        <div class="form-text text-danger">
                            @error('video_url'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Schedule Date
                        </label>
                            <input
                                type="datetime-local"
                                class="form-control"
                                name="post_schedule_date"
                                value="{{ old("post_schedule_date") ?? $post->schedule }}"
                                placeholder="Choose schedule date"
                            />
                        <div class="form-text text-danger">
                            @error('post_schedule_date'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Post Description <strong class="text-danger">*</strong>
                        </label>
                        <textarea
                        name="post_description"
                        class="form-control"
                        required>{{ old('post_description') ?? $post->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button
                            class="btn btn-theme btn-outline btn-rounded"
                            type="submit"
                        > Save
                        </button>

                        <button
                            class="btn btn-secondary btn-outline btn-rounded"
                            type="reset"
                        > Cancel
                        </button>
                    </div>
                </form>
            </div>
            @else
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Create New Post</h1>
            </div>
            <div class="col-12">
                <form action="{{url()->full()}}" method="post" enctype="multipart/form-data"> @csrf

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Upload Thumbnail (optional)
                        </label>

                        <div class="card post_thumbnail_box">
                            <div class="position-absolute">
                                <button
                                    type="button"
                                    title="Upload post thumbnail image."
                                    onclick="post_thumbnail.click();"
                                    class="btn btn-sm btn-theme btn-floating">
                                    <i class="fas fa-upload"></i>
                                </button>
                                <button
                                    type="button"
                                    id="remove_thumbnail"
                                    title="Remove post thumbnail image."
                                    class="btn btn-sm btn-theme2 btn-floating">
                                    <i class="fas fa-close"></i>
                                </button>
                            </div>
                            <input
                                type="file"
                                accept="image/jpg, image/png, image/jpeg"
                                name="post_thumbnail"
                                id="post_thumbnail"
                                style="height: 0px; width:0px;"
                            />
                            <img  height="100%" width="100%" id="post_thumbnail_imgtag" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Title  <strong class="text-danger">*</strong>
                        </label>
                        <input
                            type="text"
                            class="form-control slug-genrate"
                            name="post_title"
                            value="{{ old("post_title") }}"
                            placeholder="Enter Post title"
                            required
                        />
                        <div class="form-text text-danger">
                            @error('post_title'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Slug  <strong class="text-danger">*</strong>
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            name="post_slug"
                            id="post_slug"
                            value="{{ old("post_slug") }}"
                            placeholder="Enter Post slug"
                            required
                        />
                        <div class="form-text text-danger" id="post_slug_error">
                            @error('post_slug'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Category  <strong class="text-danger">*</strong>
                        </label>
                        <select class="form-select" name="post_category" required>
                            <option value="">Select post category</option>
                            @foreach ($categorys as $category)
                            <option
                                value="{{ $category->catid }}"
                                @selected(old('post_category') == $category->catid)
                            >{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="form-text text-danger">
                            @error('post_category'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Meta Keyword  <strong class="text-danger">*</strong>
                        </label>
                            <input
                                type="text"
                                class="form-control"
                                name="post_meta_keyword"
                                value="{{ old("post_meta_keyword") }}"
                                placeholder="Enter keyword separate with commas."
                                required
                            />
                        <div class="form-text text-danger">
                            @error('post_meta_keyword'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Meta Description <strong class="text-danger">*</strong>
                        </label>

                            <textarea
                                type="text"
                                class="form-control"
                                name="post_meta_description"
                                id="post_meta_description"
                                placeholder="Write short description in 250 word"
                                required
                            >{{ old("post_meta_description") }}</textarea>

                        <div class="form-text text-danger">
                            @error('post_meta_description'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Tutorial URL (optional)
                        </label>
                            <input
                                type="url"
                                class="form-control"
                                name="video_url"
                                value="{{ old("video_url") }}"
                                placeholder="Enter tutorial video URL"
                            />
                        <div class="form-text text-danger">
                            @error('video_url'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Schedule Date (optional)
                        </label>
                            <input
                                type="datetime-local"
                                class="form-control"
                                name="post_schedule_date"
                                value="{{ old("post_schedule_date") }}"
                                placeholder="Choose schedule date"
                            />
                        <div class="form-text text-danger">
                            @error('post_schedule_date'){{$message}}@enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-text fw-bold">
                            Post Description <strong class="text-danger">*</strong>
                        </label>
                        <textarea
                        name="post_description"
                        class="form-control"
                        required>{{ old('post_description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <button
                            class="btn btn-theme btn-outline btn-rounded"
                            type="submit"
                        > Save
                        </button>

                        <button
                            class="btn btn-secondary btn-outline btn-rounded"
                            type="reset"
                        > Cancel
                        </button>
                    </div>
                </form>
            </div>
            @endisset
        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("admin.layouts.footer")
<!-- Include footer section -->
@endsection

@push('script-section')
<script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
<script>
CKEDITOR.replace('post_description', {
    allowedContent:true,
 });
</script>
@endpush
