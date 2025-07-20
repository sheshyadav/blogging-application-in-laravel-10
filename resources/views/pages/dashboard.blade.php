@push("header-section")
<title>Softwala | Programming Tutorials & Solutions</title>
    <!-- Start SEO Settings -->
    <meta name="allow-search" content="yes" />
    <meta name="robots" content="index, follow">
    <meta name="author" content = "Shesh Yadav" />
    <meta name="copyright" content="Softwala" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="en-us" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="pinterest-rich-pin" content="true" />
    <meta name="language" content="English">
    <link rel="canonical" href="{{url('/')}}" />
    <meta name="title" content="Softwala Programming Tutorials & Solutions">
    <meta name="description" content = "Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages." />
    <meta name="keywords" content = "softwala, programming language,php,laravel,jquery,javascript,mysql,git,html,css,MySQL,HTML,CSS,git,AJAX,bootstrap, jQuery,JavaScript,Designing,Demo, software" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('/')}}">
    <meta property="og:title" content="Softwala Programming Tutorials & Solutions">
    <meta property="og:description" content="Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages.">
    <meta property="og:image" content="{{asset('assets/images/softwala/icon.png')}}">
    <!-- Twitter -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@softwalatech">
    <meta property="twitter:domain" content="softwala.com">
    <meta property="twitter:url" content="{{url('/')}}">
    <meta property="twitter:title" content="Softwala Programming Tutorials & Solutions">
    <meta property="twitter:description" content="Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages.">
    <meta property="twitter:image" content="{{asset('assets/images/softwala/icon.png')}}">
    <!-- End SEO Settings -->
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->

    <!-- Carousel Section Start -->
    <x-carousel-component />
    <!-- Carousel Section End -->

    <!-- LATEST POSTS SECTION -->
        <div class="container-fluid">
            <div class="row mx-md-2">
                <!-- Adds section -->
                <div class="adds-section"></div>

                <!-- Latest post section -->
                <div class="col-xm-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 mb-3">
                    <div class="section-heading mb-5">
                        <div class="text-theme fw-bold mt-5 fs-5"> Latest Posts </div>
                    </div>
                    @foreach ($latestPost as $post)
                    <x-post-card-component  :postid="$post->pid"/>
                    @endforeach
                </div>

                <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">
                    <!-- Catrgory list section -->
                    <x-category-component  type="simple"/>

                    <!-- Adds section -->
                    <div class="adds-section"></div>

                    <!-- Recent posts list section -->
                    <x-recent-posts-component />

                    <!-- Adds section -->
                    <div class="adds-section"></div>
                </div>

                <!-- Adds section -->
                <div class="col-12">
                    <div class="adds-section"></div>
                </div>
            </div>
        </div>
    <!-- LATEST POSTS SECTION -->
    <x-share-component :url="url('/')"  :title="'Softwala Programming Tutorials & Solutions'"/>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection


