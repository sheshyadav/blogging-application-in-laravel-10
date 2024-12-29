@push("header-section")
    <title>Softwala | Desclamier</title>
@endpush

@extends("app")
@section("content")
<!-- Include navigation section -->
@include("layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->

<section id="desclamier_section">
    <div class="container">
        <div class="headline">
            <h1 class="text-theme fw-bold my-5"> Disclaimer </h1>
        </div>
        <div class="pt-5">
            <h2 class="fw-bold text-dark">Disclaimer for Softwala</h2>

            <p>If you require any more information or have any questions about our site's disclaimer, please feel free to contact us by email at helpsoftwala@gmail.com. </p>

            <h2 class="fw-bold text-dark">Disclaimers for softwala.com</h2>

            <p>All the information on this website - https://softwala.com - is published in good faith and for general information purpose only. softwala.com does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (softwala.com), is strictly at your own risk. softwala.com will not be liable for any losses and/or damages in connection with the use of our website.</p>

            <p>From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>

            <p>Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.</p>

            <h2 class="fw-bold text-dark">Consent</h2>

            <p>By using our website, you hereby consent to our disclaimer and agree to its terms.</p>

            <h2 class="fw-bold text-dark">Update</h2>

            <p>Should we update, amend or make any changes to this document, those changes will be prominently posted here.</p>
        </div>
    </div>
</section>

<!-- End Body section -->

<!-- Include footer section -->
@include("layouts.footer")
<!-- Include footer section -->
@endsection
