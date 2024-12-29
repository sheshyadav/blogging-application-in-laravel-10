<section id="carousel_section">
    <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
    <div class="carousel-inner">
        @foreach ($carousels as $carousel)
        <div class="carousel-item {{$loop->index == 0 ? 'active':''}}">
            <img
                src="{{$carousel->carouselurl}}"
                class="d-block w-100"
                alt="{{$carousel->title}}"
            />
            <div class="carousel-caption d-none d-md-block">
                <a href="{{ $carousel->posturl }}" class="text-light" target="_blank">
                    <h5>{{$carousel->title}}</h5>
                    <p>{{$carousel->description}}</p>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <button
        class="carousel-control-prev"
        type="button"
        data-mdb-target="#carouselExampleCaptions"
        data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button
        class="carousel-control-next"
        type="button"
        data-mdb-target="#carouselExampleCaptions"
        data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</section>
