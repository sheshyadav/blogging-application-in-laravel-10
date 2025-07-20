@push("header-section")
<title>Softwala | Reset Password</title>
@endpush

@extends("app")
@section("content")
<!-- Start Body section -->
<div class="container-fluid">
    <div class="my-5">
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-5">
                <div class="card">
                    <div class="card-header text-center ">
                        <img
                            src="{{asset('assets/images/softwala/softwala.png')}}"
                            height="auto"
                            width="auto"
                            alt="Softwala logo"
                        />
                        <div class="headline">
                            <h1 class="text-theme fw-bold my-5"> Reset Password </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.update') }}" method="post"> @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label class="form-label">
                                    Email address   <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="email"
                                    class="form-control"
                                    name="email"
                                    placeholder="Your Email Id"
                                    aria-describedby="email"
                                    value="{{ $email ?? old('email') }}"
                                    required
                                    readonly
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
                                <label for="password" class="form-label">
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
                                <label for="password" class="form-label">
                                    Confirm Password <strong class="text-danger">*</strong>
                                </label>
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    class="form-control"
                                    placeholder="Your Confirmation Password"
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
                                Reset Password
                            </button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->
@endsection
