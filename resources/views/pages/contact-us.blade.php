@push("header-section")
<title>Softwala | Contact Us</title>
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
                <div class="text-theme fw-bold mt-5 fs-5"> Contact Us </div>
            </div>
            <form method="post" action="" class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Name <strong class="text-danger">*</strong> </label>
                        <input
                            type="email"
                            class="form-control"
                            name="name"
                            value="{{ old("name") }}"
                            required
                        />
                        <div class="form-text text-danger">
                            @error("name"){{$messages}}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="mb-3">
                        <label  class="form-label">Email <strong class="text-danger">*</strong> </label>
                        <input
                            type="email"
                            class="form-control"
                            name="email"
                            value="{{ old("email") }}"
                            required
                        />
                        <div class="form-text text-danger">
                            @error("email"){{$messages}}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label  class="form-label">Subject <strong class="text-danger">*</strong> </label>
                        <input
                            type="text"
                            class="form-control"
                            name="subject"
                            value="{{ old("subject") }}"
                            required
                        />
                        <div class="form-text text-danger">
                            @error("subject"){{$messages}}@enderror
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label  class="form-label">Messages <strong class="text-danger">*</strong> </label>
                        <textarea
                            class="form-control"
                            style="height:150px"
                            name="message"
                            required>{{ old("message") }}</textarea>
                        <div class="form-text text-danger">
                            @error("message"){{$messages}}@enderror
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <button
                        class="btn btn-theme w-auto"
                        type="button"
                    >Send
                    </button>
                </div>
            </form>

            <!-- social media link section -->
            <div class="my-5">
                <p class="fw-bold">Get connected with us on social networks:</p>
                <div class="text-center">
                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('facebook')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('twitter')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('instagram')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('linkedin')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-linkedin"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('pinterest')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-pinterest"></i>
                    </a>

                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="{{site('whatsapplink')}}"
                        target="_blank"
                        role="button">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a
                        class="btn text-white btn-lg btn-floating btn-theme mx-1 mb-2"
                        href="mailto:{{site('email')}}"
                        target="_blank"
                        role="button">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>


                <p class="mt-3 fw-bold">
                    If you are looking for post or product promotion then you can follow this link:
                    <a
                        href="{{ url('advertisement') }}"
                        class="text-decoration-underline"
                    > Advertisement With US. </a>
                </p>
            </div>

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recommended Posts section -->
            <x-recommend-post-component />

            <!-- Adds section -->
            <div class="adds-section"></div>
        </div>
        <!-- right side section -->
        <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">

            <!-- Catrgory list section -->
            <x-category-component type="simple" />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Recent posts list section -->
            <x-recent-posts-component />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Tool section -->
            <x-tools-component />

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
