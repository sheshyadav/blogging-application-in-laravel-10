@push("header-section")
<title>Softwala | Register</title>
@endpush

@extends("app")
@section("content")
<!-- Start Body section -->
<div class="container-fluid bg-theme">
    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-4">
                <div class="card">
                    <div class="card-header text-center ">
                        <img
                            src="{{asset('assets/images/softwala/softwala-horizontal-logo.png')}}"
                            height="auto"
                            width="auto"
                            alt="Softwala logo"
                        />
                        <div class="headline">
                            <h1 class="text-theme fw-bold my-5"> User Register </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post"> @csrf
                            <div class="mb-3">
                                <label class="form-label">
                                    User Name   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="name"
                                    placeholder="Your Name"
                                    aria-describedby="name"
                                    value="{{ old('name') }}"
                                    required
                                />
                                <div
                                    id="name"
                                    class="form-text text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Email Address   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="Your Email Id"
                                    aria-describedby="email"
                                    value="{{ old('email') }}"
                                    required
                                />
                                <div
                                    id="email"
                                    class="form-text text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label  class="form-label">
                                    Password <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Your Password"
                                    aria-describedby="password"
                                    required
                                />

                                <div
                                    id="password"
                                    class="form-text text-danger">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">
                                    Confirm Password <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Your Password"
                                    aria-describedby="password_confirmation"
                                    required
                                />

                                <div
                                    id="password_confirmation"
                                    class="form-text text-danger">
                                    @error('password_confirmation')
                                        {{$message}}
                                    @enderror
                                </div>
                            </div>

                            <button
                                type="submit"
                                class="btn btn-theme">
                                Register
                            </button>

                            <a class="btn btn-link" href="{{ route('login') }}">
                                I have already account Login?
                            </a>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->
@endsection
