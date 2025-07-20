<div class="widget mb-3 card">
    <div class="card-header fs-2 fw-bold text-dark">
        We Are Recommending You
    </div>
    <div class="card-body py-0">
        <ul class="list-unstyled my-4">
            @foreach ($recommendedpost as $post)
            <li class="mb-1">
                <i class="fas fa-long-arrow-alt-right me-2 text-theme"></i>
                <a
                    href="{{ url('post/'.$post->slug) }}"
                    title="{{ $post->title }}"
                    class="text-theme fw-bold link-hover fs-5">
                    {{ $post->title }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</div>

