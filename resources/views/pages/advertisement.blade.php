@push("header-section")
<title>Softwala | Advertisement with US</title>
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
                <div class="text-theme fw-bold mt-5 fs-5"> Advertisement with US </div>
            </div>
            <p class="">
                <strong>Welcome to Softwala</strong>,
                we provide guest post and product advertising opportunity for you.
                you can advertise your brand with us by following opportunity.
            </p>
            <div class="card border">
                <div class="card-header fw-bold">Advertisement Rules</div>
                <div class="card-body">
                  <h6 class="card-title">Before apply for paid promotion. must be follow bellow rules.</h6>
                  <p class="card-text">
                    <ol>
                        <li>Before payment must send us your content for verification.</li>
                        <li>Before publish content must be paid us.</li>
                        <li>Payment accept by PayPal.</li>
                        <li>Per Post charge will be fixed.</li>
                        <li>We will publish post on our Facebook as well.</li>
                    </ol>
                  </p>

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

                </div>
                <div class="card-footer text-muted">
                    <span class="text-success fs-5"> Price: $5 </span>
                </div>
            </div>

            <!-- recommend post section -->
            <x-recommend-post-component />
        </div>
        <!-- right side section -->
        <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 mb-3">

            <!-- Recent posts list section -->
            <x-recent-posts-component />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- Tool section -->
            <x-tools-component />

            <!-- Adds section -->
            <div class="adds-section"></div>

            <!-- tags section -->
            <x-tags-component />

        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
