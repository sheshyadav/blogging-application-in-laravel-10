@push("header-section")
<title>{{ $post->title }}</title>
    <!--- SEO Setting Section Start --->
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
    <link rel="canonical" href="{{url('post/'.$post->slug)}}" />
    <meta name="title" content="{{$post->title}}">
    <meta name="description" content="{{$post->metadescription}}" />
    <meta name="keywords" content="{{$post->metakeyword}}" />
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{url('post/'.$post->slug)}}">
    <meta property="og:title" content="{{$post->title}}">
    <meta property="og:description" content="{{$post->metadescription}}">
    <meta property="og:image" content="{{url('assets/images/blog/'.$post->thumbnail)}}">
    <!-- Twitter -->
    <meta property="fb:app_id" content="966242223397117">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@softwalatech">
    <meta property="twitter:domain" content="softwala.com">
    <meta property="twitter:url" content="{{url('post/'.$post->slug)}}">
    <meta property="twitter:title" content="{{$post->title}}">
    <meta property="twitter:description" content="{{$post->metadescription}}">
    <meta property="twitter:image" content="{{url('assets/images/blog/'.$post->thumbnail)}}">
    <!--- SEO Setting Section End --->
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
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
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                <div class="section-heading mb-5">
                    <h1 class="text-theme fw-bold"> {{ $post->title}} </h1>
                    <div class="">
                        <small class="fw-bold px-2" title="Author">
                            <i class="fas fa-user"></i> {{ $post->Author->name }}
                        </small>
                        <small class="fw-bold px-2" title="Publish date">
                            <i class="fas fa-calendar"></i> {{ $post->created_at->format("d-M-Y") }}
                        </small>
                        {{-- <small class="fw-bold px-2" title="Publish date">
                            <i class="fas fa-eye"></i> 0
                        </small> --}}
                        <span class="badge rounded-pill badge-dark mx-2 px-2" title="Category">
                            {{ $post->Category->name }}
                        </span>
                    </div>
                </div>
                {{--- thumbnail section ---}}
                @if($post->thumbnail)
                <div class="mb-5">
                    <img
                        src="{{asset('assets/images/blog/'.$post->thumbnail)}}"
                        height="100%"
                        width="100%"
                        class="rounded"
                        loading="lazy"
                        alt="{{ $post->title }}" />
                </div>
                @endif
                {{--- thumbnail section ---}}

                {{--- blog content section ---}}
                <div class="mb-5">
                    {!! $post->description !!}
                </div>
                {{--- blog content section ---}}

                {{-- Author info section start  --}}
                {{-- <x-author-info-component :author="$post->Author->id"/> --}}
                {{-- Author info section start  --}}

                {{-- Recommending post section start --}}
                <x-recommend-post-component />
                {{-- Recommending post section end --}}
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                <!-- Catrgory list section -->
                <x-category-component  type="simple"/>

                <!-- Adds section -->
                <div class="adds-section"></div>

                <!-- Recent posts list section -->
                <x-recent-posts-component />

                <!-- Adds section -->
                <div class="adds-section"></div>

                 <!-- Popular Tag -->
                 <x-tags-component />
            </div>
        </div>
    </div>
    <x-share-component :url="url('post/'.$post->slug)"  :title="$post->title"/>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection

@push('script-section')
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
@endpush
