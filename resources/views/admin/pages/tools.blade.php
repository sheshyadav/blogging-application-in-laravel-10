@push("header-section")
<title>Softwala | Tools</title>
@endpush

@extends("admin.app")
@section("content")
<!-- Include navigation section -->
@include("admin.layouts.header")
<!-- Include navigation section -->

<!-- Start Body section -->
<div class="container-fluid">
    <div class="container">
        <div class="row my-5">
            @if(Session::get('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success! </strong> {{Session::get('success')}}
                </div>
            @elseif(Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    <strong>Error! </strong> {{Session::get('error')}}
                </div>
            @endif
            <div class="col-12 headline">
                <h1 class="text-theme fw-bold my-5"> Tools </h1>
            </div>
            <div class="col-12 text-end mb-3">
                <a
                    href="{{url('/')}}"
                    class="btn btn-theme btn-outline btn-rounded"
                > <i class="fas fa-plus"></i> Add New
                </a>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>
</div>
<!-- End Body section -->

<!-- Include footer section -->
@include("admin.layouts.footer")
<!-- Include footer section -->
@endsection

