@push("header-section")
<title>Softwala | Reset Password</title>
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
                            <h1 class="text-theme fw-bold my-5"> Reset Password </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('password.email') }}" method="post"> @csrf
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

                            <button
                                type="submit"
                                class="btn btn-theme">
                                Send Password Reset Link
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
