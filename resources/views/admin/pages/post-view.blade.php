@push('header-section')
    <title>{{ $post->title }}</title>
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
                @if (Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>Success! </strong> {{ Session::get('success') }}
                    </div>
                @elseif(Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                        <strong>Error! </strong> {{ Session::get('error') }}
                    </div>
                @endif
            </div>

            {{-- Post content section start --}}
            <div class="row mb-5">
                <div class="col-12">
                    <div class="section-heading mb-5">
                        <h1 class="text-theme fw-bold"> {{ $post->title }} </h1>
                        <div class="">
                            <small class="fw-bold px-2" title="Author">
                                <i class="fas fa-user"></i> {{ $post->Author->name }}
                            </small>
                            <small class="fw-bold px-2" title="Publish date">
                                <i class="fas fa-calendar"></i> {{ $post->created_at->format('d-M-Y') }}
                            </small>
                            <small class="fw-bold px-2" title="Publish date">
                                <i class="fas fa-eye"></i> 0
                            </small>
                            <span class="badge rounded-pill badge-dark mx-2 px-2" title="Category">
                                {{ $post->Category->name }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    {{-- - thumbnail section - --}}
                    @if ($post->thumbnail)
                        <div class="mb-5">
                            <img src="{{ asset('assets/images/blog/' . $post->thumbnail) }}" height="100%" width="100%"
                                class="rounded" loading="lazy" alt="{{ $post->thumbnail }}" />
                        </div>
                    @endif
                    {{-- - thumbnail section - --}}
                    {!! $post->description !!}
                </div>

            </div>
            {{-- Post content section end --}}
            <hr />
            {{-- Post analytics section start --}}
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-share fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3 mb-2">
                    <div class="card bg-theme">
                        <div class="card-body text-center text-light">
                            <i class="fas fa-eye fs-4"></i>
                            <span class="fs-4">12k</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Month Reports </div>
                        </div>
                        <canvas id="PostMonthReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                    <!-- Today Analytics section -->
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Today Reports </div>
                        </div>
                        <canvas id="PostTodayReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
                    </div>

                    <!-- Week Analytics section -->
                    <div class="widget mb-3">
                        <div class="section-heading">
                            <div class="text-theme fw-bold mt-5 fs-5"> Week Reports </div>
                        </div>
                        <canvas id="PostWeekReportsChart"></canvas>
                        <div class="text-center">
                            <span class="form-text fw-bold">Total View: 12</span>
                            <span class="form-text fw-bold">,</span>
                            <span class="form-text fw-bold">Share: 10</span>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Post analytics section end --}}
        </div>
    </div>
    <!-- End Body section -->

    <!-- Include footer section -->
    @include('admin.layouts.footer')
    <!-- Include footer section -->
@endsection

@push('script-section')
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="{{ asset('assets/js/chart.main.js') }}"></script>
@endpush
