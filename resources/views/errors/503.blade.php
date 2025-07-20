@push("header-section")
<title>Softwala | 503 - page not found</title>
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->

<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <img src="{{asset('assets/images/error/503.png')}}" class="" alt="website under maintenance" width="400px" />
                <h6 class="form-text fw-bold">We Are Coming Soon</h6>
                <h1 class="text-theme fw-bold">The website under maintenance!</h1>
            </div>

            <div class="col-12 text-center">
                <h6 class="form-text fw-bold">Our website is under maintenance, we are working very<br/>
                hard to give you the best experience with this one.</h6>
            </div>

            <div class="col-12 text-center mt-5">
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
            </div>

        </div>
    </div>
</div>

<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection



