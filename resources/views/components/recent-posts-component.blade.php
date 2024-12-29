<div class="widget mb-3">
    <div class="section-heading">
        <div class="text-theme fw-bold mt-5 fs-5"> Recent Posts </div>
    </div>
    <div class="widget-latest">
        <ul class="block-list">
        @foreach($recentPosts as $post)
            <li class="single-item">
                <div class="item-img">
                    <div class="count-number">{{$loop->index+1}}</div>
                </div>
                <div class="item-content">
                    <h4 class="item-title text-theme">
                        <a
                            href="{{url('post/'.$post->slug)}}"
                            title="{{$post->title}}"
                            class="link-hover">
                            {{$post->title}}
                        </a>
                    </h4>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
