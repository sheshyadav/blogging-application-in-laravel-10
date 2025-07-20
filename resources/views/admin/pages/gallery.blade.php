@push('header-section')
    <title>Softwala | Gallery </title>
@endpush

@extends('admin.app')
@section('content')
    <!-- Include navigation section -->
    @include('admin.layouts.header')
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <span class="fs-2 fw-bold">Gallery Images ({{count($gallery)}})</span>
                </div>
                <div class="col text-end my-auto">
                    <button
                        type="button"
                        id="UploadGalleryImage"
                        class="btn btn-theme btn-outline btn-rounded"
                        > <i class="fas fa-plus"></i> Upload Image
                    </button>

                </div>
            </div> <hr/>

            <!--Gallery images show section start-->
            <div class="row my-5">
                @foreach ($gallery as $image)
                <div class="col-12 col-sm-6 col-md-4 mb-3" id="gallery_image_{{$loop->index}}">
                    <!-- Image with no mask -->
                    <div class="bg-image rounded-6" style="max-height:200px">
                        <img src="{{$image}}" class="w-100"/>
                        <!-- Mask -->
                        <div class="mask">
                            <div class="bottom-0 d-flex align-items-end h-100 text-center justify-content-center pb-1">
                                <div>
                                    <button
                                        type="button"
                                        title="View image"
                                        onclick="window.open('{{$image}}','_blank');"
                                        class="btn btn-sm btn-success btn-floating">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button
                                        type="button"
                                        title="Copy URL"
                                        data-id="{{$image}}"
                                        class="btn btn-sm btn-primary btn-floating CopyGalleryURL">
                                        <i class="fas fa-copy"></i>
                                    </button>

                                    <button
                                        type="button"
                                        title="Delete image"
                                        data-index="gallery_image_{{$loop->index}}"
                                        data-id="{{$image}}"
                                        class="btn btn-sm btn-danger btn-floating DeleteGalleryImage">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!--Gallery images show section end-->

        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    @include('admin.layouts.footer')
    <!-- Include footer section -->
@endsection
