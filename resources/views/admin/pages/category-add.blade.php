@push("header-section")
<title>Softwala | Blog Catehory</title>
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
            @isset($category) Update Category @else Create New Category @endisset
            </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-5">
                <div class="card">
                    <div class="card-body">
                        @isset($category)
                        <form action="{{url()->full()}}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="mb-3">
                                <label class="form-label">
                                    Category Name   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="category_name"
                                    placeholder="Category name"
                                    value="{{ old('category_name') ?? $category->name}}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_name'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Category Slug <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="category_slug"
                                    placeholder="Category slug"
                                    oninput="this.value=this.value.replace(/[^a-zA-Z0-9-]/g,'')"
                                    value="{{ old('category_slug') ??  $category->slug}}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_slug'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Category Icon
                                </label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="category_icon"
                                    placeholder="Category Icon"
                                    value="{{ old('category_icon') }}"
                                    accept="image/png, image/jpeg, image/jpg"
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_icon'){{$message}}@enderror
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
                        <form action="{{url()->full()}}" method="post" enctype="multipart/form-data"> @csrf
                            <div class="mb-3">
                                <label class="form-label">
                                    Category Name   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="category_name"
                                    placeholder="Category name"
                                    value="{{ old('category_name') }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_name'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Category Slug   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="category_slug"
                                    placeholder="Category slug"
                                    oninput="this.value=this.value.replace(/[^a-zA-Z0-9-]/g,'')"
                                    value="{{ old('category_slug') }}"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_slug'){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Category Icon   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="file"
                                    class="form-control"
                                    name="category_icon"
                                    placeholder="Category Icon"
                                    value="{{ old('category_icon') }}"
                                    accept="image/png, image/jpeg, image/jpg"
                                    required
                                />
                                <div
                                    class="form-text text-danger">
                                    @error('category_icon'){{$message}}@enderror
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

