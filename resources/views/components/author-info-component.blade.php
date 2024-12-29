<div class="my-5">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-4 text-center">
                  <img
                      src="{{asset('assets/images/website/'.$author->profile)}}"
                      alt="{{$author->name}}"
                      class="profile_image_section"
                  />
                </div>
                <div class="col-12 col-sm-8 col-md-8">
                    <h1 class="card-title text-theme fw-bold">
                        {{$author->name}}
                    </h1>
                    <p class="card-text">
                        {{$author->about}}
                    </p>
                    <p class="card-text">
                    @isset($author->Social)
                        Follow Me:
                        @if($author->Social->facebook)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->facebook}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-facebook-f text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->twitter)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->twitter}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-twitter text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->instagram)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->instagram}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-instagram text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->linkedin)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->linkedin}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-linkedin text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->pinterest)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->pinterest}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-pinterest text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->whatsapp)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->whatsapp}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-whatsapp text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->website)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->website}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-internet-explorer text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->youtube)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->youtube}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-youtube text-theme"></i>
                        </a>
                        @endif

                        @if($author->Social->telegram)
                        <a
                            class="btn btn-sm btn-floating"
                            href="{{$author->Social->telegram}}"
                            target="_blank"
                            role="button">
                            <i class="fab fa-telegram text-theme"></i>
                        </a>
                        @endif

                    @endisset
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
