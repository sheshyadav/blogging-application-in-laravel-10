@push("header-section")
<title>Softwala | Quick-links</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
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
                <div class="text-theme fw-bold mt-5 fs-5"> Quick links </div>
            </div>

            <div class="table-responsive mb-5">
                <table class="table table-striped data-table-list border">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <a
                                        href="{{url('post/'.$post->slug)}}"
                                        class="link-hover text-theme fs-5"
                                    >
                                    {{$post->title}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Recommending post section start --}}
            <x-recommend-post-component />
            {{-- Recommending post section end --}}
        </div>
        <!-- right side section -->
        <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">


            <!-- Catrgory list section -->
            <x-category-component  type="simple"/>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recent posts list section -->
            <x-recent-posts-component />

            <!-- Adds section -->
            <div class="adds-section"></div>
            <!-- Tool section -->
            <div class="widget">
                <div class="section-heading mb-5">
                    <div class="text-theme fw-bold mt-5 fs-3"> Tools </div>
                </div>
                <div class="widget-latest">
                    <ul class="block-list">
                        <li class="single-item">
                            <div class="item-img">
                                <div class="count-number">1</div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">
                                    <a href="https://techsolutionstuff.com/tools/online-json-formatter-and-viewer"
                                        title="Online Json Formatter and Viewer">
                                        Online Json Formatter and
                                        Viewer
                                    </a>
                                </h4>
                            </div>
                        </li>
                        <li class="single-item">
                            <div class="item-img">
                                <div class="count-number">2</div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">
                                    <a href="https://techsolutionstuff.com/tools/online-password-generator"
                                        title="Online Password Generator">
                                        Online Password Generator
                                    </a>
                                </h4>
                            </div>
                        </li>
                        <li class="single-item">
                            <div class="item-img">
                                <div class="count-number">3</div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">
                                    <a href="https://techsolutionstuff.com/tools/online-character-counter"
                                        title="Online Character Counter">
                                        Online Character Counter
                                    </a>
                                </h4>
                            </div>
                        </li>
                        <li class="single-item">
                            <div class="item-img">
                                <div class="count-number">4</div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">
                                    <a href="https://techsolutionstuff.com/tools/online-css-minifier"
                                        title="Online CSS Minifier / Compressor">
                                        Online CSS Minifier / Compressor
                                    </a>
                                    <sup class="font-weight-bold text-danger blink"> New
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    </sup>
                                </h4>
                            </div>
                        </li>
                        <li class="single-item">
                            <div class="item-img">
                                <div class="count-number">5</div>
                            </div>
                            <div class="item-content">
                                <h4 class="item-title">
                                    <a href="https://techsolutionstuff.com/tools/online-css-beautifier"
                                        title="Online CSS Beautifier / Formatter">
                                        Online CSS Beautifier / Formatter
                                    </a>
                                    <sup class="font-weight-bold text-danger blink"> New
                                        <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    </sup>
                                </h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection

@push('script-section')
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
@endpush
