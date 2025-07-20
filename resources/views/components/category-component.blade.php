
@if($type === 'simple')
<div class="widget-follow-us mb-3">
    <div class="section-heading mb-5">
        <div class="text-theme fw-bold mt-5 fs-5"> Categories </div>
    </div>
    <ul>
        @foreach ($categorys as $category)
        <li class="single-item">
            <a
                title="{{$category->name}}"
                href="{{url('category/'.$category->slug)}}">
                {{$category->name}} ({{$category->Posts->count()}})
            </a>
        </li>
        @endforeach
    </ul>
</div>
@elseif($type === 'card')
<div class="row">
    @foreach($categorys as $category)
        <div class="col-xs-12 col-sm-12 col-md-6 mb-5">
            <a class="nav-link" href="{{ url('category/'.$category->slug) }}">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ asset('assets/images/category/' . $category->icon) }}"
                            alt="{{ $category->name }}" class="rounded-circle" height="100px"
                            width="100px" />
                        <h4 class="card-title fw-bold mt-3">{{ $category->name }} ({{$category->Posts->count()}})</h4>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
@endif
