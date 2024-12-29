@push("header-section")
<title>Softwala | Login</title>
@endpush

@extends("app")
@section("content")
<!-- Start Body section -->
<div class="container-fluid bg-theme">
    <div class="py-5">
        <div class="row justify-content-center">
            <div class="col-auto col-sm-auto col-md-4">
                <div class="card" >
                    <div class="card-header text-center ">
                        <img
                            src="{{asset('assets/images/softwala/softwala-horizontal-logo.png')}}"
                            height="auto"
                            width="auto"
                            alt="Softwala logo"
                        />
                        <div class="headline">
                            <h1 class="text-theme fw-bold my-5"> User Login </h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post"> @csrf
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
                                <label class="form-label">
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
                            @if(Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Success!</strong> {{Session::get('success')}}
                                </div>
                            @elseif(Session::get('error'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>Error!</strong> {{Session::get('error')}}
                                </div>
                            @endif

                            <button
                                type="submit"
                                class="btn btn-theme">
                                Login
                            </button>
                            @if(Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Body section -->
@endsection

