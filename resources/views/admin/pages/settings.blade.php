@push("header-section")
<title>Softwala | Website Setting</title>
@endpush

@extends("admin.app")
@section("content")
<!-- Include navigation section -->
@include("admin.layouts.header")
<!-- Include navigation section -->
@php  $user =  auth()->user(); @endphp
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
                <h1 class="text-theme fw-bold my-5"> Admin Setting </h1>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Website Basic Info</div>
                    <div class="card-body">
                        <form method="post" action="">

                            <div class="mb-3">
                                <label  class="form-label">
                                    Website Title
                                    <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="website_title"
                                    value="{{ old("website_title") }}"
                                    placeholder="Enter website title"
                                    required
                                />
                                <div class="form-text text-danger">
                                    @error("website_title"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">
                                    Website Keyword
                                    <strong class="text-danger">*</strong>
                                </label>
                                <textarea
                                    rows="4"
                                    class="form-control"
                                    name="website_keyword"
                                    value="{{ old("website_keyword") }}"
                                    placeholder="Enter website keyword"
                                    required
                                ></textarea>
                                <div class="form-text text-danger">
                                    @error("website_keyword"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">
                                    Website Description
                                    <strong class="text-danger">*</strong>
                                </label>
                                <textarea
                                    rows="4"
                                    class="form-control"
                                    name="website_description"
                                    value="{{ old("website_description") }}"
                                    placeholder="Write website description"
                                    required
                                ></textarea>
                                <div class="form-text text-danger">
                                    @error("website_description"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                    >Update
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Update Website Social Media Links</div>
                    <div class="card-body">
                        <form method="post" action="/admin/profile/social-media/update"> @csrf
                            <div class="mb-3">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-facebook-f text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="facebook_url"
                                        value="{{ old("facebook_url") }}"
                                        placeholder="Facebook link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("facebook_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-twitter text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="twitter_url"
                                        value="{{ old("twitter_url") }}"
                                        placeholder="Twitter link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("twitter_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-instagram text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="instagram_url"
                                        value="{{ old("instagram_url") }}"
                                        placeholder="Instagram link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("instagram_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-linkedin text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="linkedin_url"
                                        value="{{ old("linkedin_url") }}"
                                        placeholder="Linkedin link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("linkedin_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-pinterest text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="pinterest_url"
                                        value="{{ old("pinterest_url") }}"
                                        placeholder="Pinterest link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("pinterest_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-whatsapp text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="whatsapp_url"
                                        value="{{ old("whatsapp_url") }}"
                                        placeholder="Whatsapp link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("whatsapp_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-youtube text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="youtube_url"
                                        value="{{ old("youtube_url") }}"
                                        placeholder="Youtube link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("youtube_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-telegram text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="telegram_url"
                                        value="{{ old("telegram_url") }}"
                                        placeholder="Telegram link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("telegram_url"){{$message}}@enderror
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fab fa-internet-explorer text-theme"></i>
                                    </span>
                                    <input
                                        type="url"
                                        class="form-control"
                                        name="website_url"
                                        value="{{ old("website_url") }}"
                                        placeholder="Website link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("website_url"){{$message}}@enderror
                                </div>


                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="admin_id" value="{{$user->id}}" />
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                    >Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Add Dynamic Code In Header</div>
                    <div class="card-body">
                        <form method="post" action="/admin/profile/social-media/update"> @csrf
                            <div class="mb-3">
                                <textarea
                                    rows="15"
                                    class="form-control"
                                    name="website_header_code"
                                    value="{{ old("website_header_code") }}"
                                    placeholder="Write header dynamic code hear"
                                ></textarea>
                                <div class="form-text text-danger">
                                    @error("website_header_code"){{$message}}@enderror
                                </div>
                            </div>
                            <div class="">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                    >Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Add Dynamic Code In Footer</div>
                    <div class="card-body">
                        <form method="post" action="/admin/profile/social-media/update"> @csrf
                            <div class="mb-3">
                                <textarea
                                    rows="15"
                                    class="form-control"
                                    name="website_footer_code"
                                    value="{{ old("website_footer_code") }}"
                                    placeholder="Write footer dynamic code hear"
                                ></textarea>
                                <div class="form-text text-danger">
                                    @error("website_footer_code"){{$message}}@enderror
                                </div>
                            </div>
                            <div class="">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                    >Update
                                </button>
                            </div>
                        </form>
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

