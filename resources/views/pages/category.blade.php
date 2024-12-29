@push("header-section")
    <title>Softwala | Category</title>
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<!-- Blog Category Section start -->
<section id="blog_category_section">
    <div class="container-fluid">
        <div class="row my-5 mx-md-5">
            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Left side Category Section -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="section-heading mb-5">
                    <div class="text-theme fw-bold mt-5 fs-3"> Category </div>
                </div>
                <!-- Blog Category Section -->
                <x-category-component type="card" />
                <!-- Blog Category Section -->

                {{-- Recommending post section start --}}
                <x-recommend-post-component />
                {{-- Recommending post section end --}}
            </div>

            <!-- Right side Section -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                <!-- Tool section -->
                <x-tools-component />

                <!-- recent posts -->
                <x-recent-posts-component />

                <!-- Adds section -->
                <div class="adds-section"></div>

                <!-- Popular Tag -->
                <x-tags-component />

                <!-- Adds section -->
                <div class="adds-section"></div>
            </div>

            <!-- Adds section -->
            <div class="adds-section"></div>
        </div>
    </div>
</section>
<!-- Blog Category Section End -->
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
