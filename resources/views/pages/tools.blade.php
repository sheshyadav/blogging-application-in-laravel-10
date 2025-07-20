@push("header-section")
<title>Softwala | Tools</title>
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="row mx-md-2">
        <!-- left side form section -->
        <div class="col-xm-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-3">
            <div class="section-heading mb-5">
                <div class="text-theme fw-bold mt-5 fs-5"> Tools </div>
            </div>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recommended Posts section -->
            <x-recommend-post-component />

            <!-- Adds section -->
            <div class="adds-section"></div>
        </div>
        <!-- right side section -->
        <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">

            <!-- Catrgory list section -->
            <x-category-component type="simple" />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recent posts list section -->
            <x-recent-posts-component />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- tags list section -->
            <x-tags-component />

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
