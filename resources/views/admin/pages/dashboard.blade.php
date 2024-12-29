@push('header-section')
    <title>Softwala | Admin Dashboard</title>
@endpush

@extends('admin.app')
@section('content')
    <!-- Include navigation section -->
    @include('admin.layouts.header')
    <!-- Include navigation section -->

    <!-- Start Body section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-list-alt text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold">{{ $category }}</p>
                                    <p class="card-title fw-bold">Category</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-file text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold">{{ $posts }}</p>
                                    <p class="card-title fw-bold">Posts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-images text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold">{{ $carousel }}</p>
                                    <p class="card-title fw-bold">Carousels</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                    <div class="card admin_dashboard_card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="icon-box">
                                    <i class="fa-solid fa-gear text-theme"></i>
                                </div>
                                <div class="">
                                    <p class="card-text fs-4 fw-bold">{{ $subscriber }}</p>
                                    <p class="card-title fw-bold">Subscribers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row my-5">
                <div class="col-12 col-sm-12 col-md-8">
                    <div class="section-heading">
                        <div class="text-theme fw-bold fs-3"> Today Trending </div>
                    </div>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-12 col-sm-12 col-md-4">
                    <div class="section-heading">
                        <div class="text-theme fw-bold fs-3"> Today Trending </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    @include('admin.layouts.footer')
    <!-- Include footer section -->
@endsection
