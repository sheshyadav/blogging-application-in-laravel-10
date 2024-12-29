@push("header-section")
<title>Softwala | Blog Carousel</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" />
@endpush

@extends("admin.app")
@section("content")
<!-- Include navigation section -->
@include("admin.layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="container">
        <div class="headline">
            <h1 class="text-theme fw-bold my-5">
            @isset($carousel) Update Carousel @else Create New Carousel @endisset
            </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-6">
                <div class="card">
                    <div class="card-body">
                        @isset($carousel)
                        <form action="{{url()->full()}}" method="post" > @csrf
                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel Title   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="carousel_title"
                                    placeholder="carousel title"
                                    value="{{ old('carousel_title') ?? $carousel->title }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_title'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel description   <strong class="text-danger">*</strong>
                                </label>
                                <textarea
                                    class="form-control"
                                    name="carousel_description"
                                    placeholder="Carousel description"
                                    required
                                >{{ old('carousel_description') ?? $carousel->description }}</textarea>
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_description'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel URL <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="url"
                                    class="form-control"
                                    name="carousel_url"
                                    placeholder="Carousel Image URL"
                                    value="{{ old('carousel_url') ?? $carousel->carouselurl }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_url'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Post URL
                                </label>
                                <input
                                    type="url"
                                    class="form-control"
                                    name="post_url"
                                    placeholder="Carousel Post URL"
                                    value="{{ old('post_url') ?? $carousel->posturl}}"
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('post_url'){{$message}}@enderror
                                </div>
                            </div>

                            @if(Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Success! </strong> {{Session::get('success')}}
                                </div>
                            @elseif(Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error! </strong> {{Session::get('error')}}
                                </div>
                            @endif

                            <button
                                type="submit"
                                class="btn btn-theme"
                                > Submit
                            </button>
                        </form>
                        @else
                        <form action="{{url()->full()}}" method="post" > @csrf
                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel Title   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="carousel_title"
                                    placeholder="carousel title"
                                    value="{{ old('carousel_title') }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_title'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel description   <strong class="text-danger">*</strong>
                                </label>
                                <textarea
                                    class="form-control"
                                    name="carousel_description"
                                    placeholder="Carousel description"
                                    required
                                >{{ old('carousel_description') }}</textarea>
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_description'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Carousel URL <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="url"
                                    class="form-control"
                                    name="carousel_url"
                                    placeholder="Carousel Image URL"
                                    value="{{ old('carousel_url') }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('carousel_url'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Post URL
                                </label>
                                <input
                                    type="url"
                                    class="form-control"
                                    name="post_url"
                                    placeholder="Carousel Post URL"
                                    value="{{ old('post_url') }}"
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('post_url'){{$message}}@enderror
                                </div>
                            </div>

                            @if(Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Success! </strong> {{Session::get('success')}}
                                </div>
                            @elseif(Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error! </strong> {{Session::get('error')}}
                                </div>
                            @endif

                            <button
                                type="submit"
                                class="btn btn-theme"
                                > Submit
                            </button>
                        </form>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("admin.layouts.footer")
<!-- Include footer section -->
@endsection

@push('script-section')
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
@endpush
