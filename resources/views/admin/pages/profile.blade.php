@push("header-section")
<title>Softwala | Admin Profile</title>
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
                <h1 class="text-theme fw-bold my-5"> Admin Profile </h1>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Update Account Info </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img
                                @isset($user->profile)
                                src="{{asset('assets/images/website/'.$user->profile)}}"
                                @else
                                src="{{asset('assets/images/website/non.png')}}"
                                @endisset
                                class="upload_image_file profile_image_section"
                                for='@json(["id"=>$user->id, "url"=>"/admin/profile/image/update"])'
                                title="Click to update your profile image."
                            />
                        </div>

                        <form method="post" action="/admin/profile/info/update"> @csrf
                            <div class="mb-3">
                                <label  class="form-label">Name <strong class="text-danger">*</strong> </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    value="{{ old("name") ?? $user->name }}"
                                    placeholder="Enter your name"
                                    required
                                />
                                <div class="form-text text-danger">
                                    @error("name"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    value="{{ old("email") ?? $user->email }}"
                                    placeholder="Enter your email"
                                    readonly
                                />
                                <div class="form-text text-danger">
                                    @error("email"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">About <strong class="text-danger">*</strong> </label>
                                <textarea
                                    class="form-control"
                                    rows="3"
                                    name="about"
                                    placeholder="Write about self."
                                    required
                                >{{ old("about") ?? $user->about }}</textarea>

                                <div class="form-text text-danger">
                                    @error("about"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
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
                    <div class="card-header bg-theme">Update Social Media Links</div>
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
                                        value="{{ old("facebook_url") ?? $user->Social->facebook }}"
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
                                        value="{{ old("twitter_url") ?? $user->Social->twitter }}"
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
                                        value="{{ old("instagram_url") ?? $user->Social->instagram }}"
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
                                        value="{{ old("linkedin_url") ?? $user->Social->linkedin }}"
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
                                        value="{{ old("pinterest_url") ?? $user->Social->pinterest }}"
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
                                        value="{{ old("whatsapp_url") ?? $user->Social->whatsapp }}"
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
                                        value="{{ old("youtube_url") ?? $user->Social->youtube }}"
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
                                        value="{{ old("telegram_url") ?? $user->Social->telegram }}"
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
                                        value="{{ old("website_url") ?? $user->Social->website }}"
                                        placeholder="Website link"
                                    />
                                </div>
                                <div class="form-text text-danger">
                                    @error("website_url"){{$message}}@enderror
                                </div>


                            </div>
                            <div class="mb-3">
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
                    <div class="card-header bg-theme">Change Account Email</div>
                    <div class="card-body">
                        <form method="post" action="/admin/account/email/update"> @csrf
                            <div class="mb-3">
                                <label  class="form-label">Current Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="current_email"
                                    value="{{ $user->email }}"
                                    readonly
                                />
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">New Email <strong class="text-danger">*</strong> </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="new_email"
                                    value="{{ old("new_email") }}"
                                    placeholder="Enter new email"
                                    required
                                />
                                <div class="form-text text-danger">
                                    @error("new_email"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Current Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="current_password"
                                    value="{{ old('current_password') }}"
                                    required
                                    placeholder="Enter you current password"
                                />
                                <div class="form-text text-danger">
                                    @error("current_password"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                >Update Email
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-6">
                <div class="card text-white mb-3">
                    <div class="card-header bg-theme">Change Account Password </div>
                    <div class="card-body">
                        <form method="post" action="/admin/account/password/update"> @csrf
                            <div class="mb-3">
                                <label  class="form-label">Current Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="current_password"
                                    value="{{ old('current_password') }}"
                                    required
                                    placeholder="Enter you current password"
                                />
                                <div class="form-text text-danger">
                                    @error("current_password"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">New Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password"
                                    value="{{ old('password') }}"
                                    required
                                    placeholder="Enter new password"
                                />
                                <div class="form-text text-danger">
                                    @error("password"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label  class="form-label">Confirm Password <strong class="text-danger">*</strong> </label>
                                <input
                                    type="password"
                                    class="form-control"
                                    name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    required
                                    placeholder="Enter confirm password"
                                />
                                <div class="form-text text-danger">
                                    @error("password_confirmation"){{$message}}@enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <button
                                    type="submit"
                                    class="btn btn-theme"
                                >Update Password
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

