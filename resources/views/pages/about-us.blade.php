@push("header-section")
    <title>Softwala | About - US</title>
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->

<section id="about_us_section">
    <div class="container">
        <div class="headline">
            <h1 class="text-theme fw-bold my-5"> About US</h1>
        </div>
        <div class="row">
            <!-- left side section -->
            <div class="col-12 col-sm-12 col-md-8 ol-lg-8 col-xl-8 col-xxl-8">
                <p class="mt-5">
                    <strong>Welcome to Softwala</strong>, a platform for coding enthusiasts to learn and develop their programming skills. Our goal is to make programming accessible and enjoyable for everyone, regardless of their skill level.
                </p>
                <p class="">
                    At Softwala, we provide a wide range of coding tutorials, from basic concepts to advanced techniques. Our tutorials are designed to be easy-to-follow and engaging, with practical examples and real-world applications. Whether you're a beginner or an experienced programmer, you'll find something valuable on our site.
                </p>
                <p class="">
                    We believe that programming is more than just a skill – it's a mindset. That's why we strive to inspire and motivate our readers to become lifelong learners and problem solvers. We encourage you to ask questions, share your ideas, and collaborate with others in our community.
                </p>
                <p class="">
                    Softwala specifically for sharing programming issue and examples. We’ll be sharing some solutions  of codes of PHP, Laravel Framework, CSS3, HTML5, MYSQL, Bootstrap, React JS, Vue JS Framework, JQuery, Javascript etc. In our site i am sure you will find something better solution.
                </p>
                <p class="">
                    At Softwala, we're passionate about coding and we're committed to helping you achieve your goals. We hope you'll join us on this exciting journey of learning and discovery.
                </p>

                <p class="fw-bold">
                    !! Thank you for visiting Softwala !!
                </p>


                <!-- Recommended Posts section -->
                <x-recommend-post-component />

            </div>

            <!-- right side section -->
            <div class="col-xm-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">

                <!-- Catrgory list section -->
                <x-category-component type="simple" />

                <!-- Adds section -->
                <div class="adds-section"></div>

                <!-- Recent posts list section -->
                <x-recent-posts-component />

                <!-- Adds section -->
                <div class="adds-section"></div>


                <!-- tags list section -->
                <x-tags-component />

            </div>
        </div>
    </div>
</section>

<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
