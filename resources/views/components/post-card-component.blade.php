<div class="card mb-3 border overflow-hidden">
    <a href="{{ url('post/' . $post->slug) }}" class="text-decoration-none">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
                @if ($post->thumbnail)
                    <img src="{{ asset('assets/images/blog/' . $post->thumbnail) }}" alt="{{ $post->title }}"
                        class="rounded-start" height="100%" width="100%" />
                @else
                    <div class="default-thumbnail-image-box">
                        <img src="{{ asset('assets/images/softwala/dots.png') }}" class="top-left-side-dots" />
                        <img src="{{ asset('assets/images/softwala/softwala-white-logo.png') }}"
                            class="right-top-side-log" />
                        <img src="{{ asset('assets/images/softwala/dots.png') }}" class="bottom-right-side-dots" />
                        <span class="bottom-left-side-link">{{ env('APP_DOMAIN') }}</span>

                        <div class="text-light fs-4 fw-bold">
                            {{ $post->title }}
                        </div>

                    </div>
                @endif
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-theme link-hover">{{ $post->title }}</h5>
                    <p class="description mb-0">{{ substr(strip_tags($post->metadescription), 0, 150) }}... </p>
                </div>
                <div class="card-footer bg-theme position-absolute w-100 bottom-0">
                    <small class="text-light fw-bold px-2" title="Author">
                        <i class="fas fa-user"></i> {{ $post->Author->name }}
                    </small>
                    <small class="text-light fw-bold px-2" title="Publish date">
                        <i class="fas fa-calendar"></i> {{ $post->created_at->format('d M, Y') }}
                    </small>
                    {{-- <small class="text-light fw-bold px-2" title="Publish date">
                        <i class="fas fa-eye"></i> 12k
                    </small> --}}
                    <span class="badge rounded-pill badge-dark mx-2 px-2" title="Category">
                        {{ $post->Category->name }}
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>
