@push("header-section")
<title>Softwala | 404 - page not found</title>
@endpush

@extends("app")
@section("content")
<!-- Start Body section -->
<div class="contact-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 text-center">
                <img src="{{asset('assets/images/error/404.png')}}" class="" alt="404 page not found" width="400px" />
                <h1 class="text-theme fw-bold">Oops! We can't find that page.</h1>
            </div>

            <div class="col-12 text-center">
                <h6 class="form-text fw-bold">Sorry, the page you're looking for doesn't exist. <br/>
                If you think something is broken, report a problem.</h6>
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
@endsection


