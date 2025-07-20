<!-- Navbar Section Start -->
@php $user = auth()->user(); @endphp
<section id="navbar_section">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-theme">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-light"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    <img src="{{ asset('assets/images/softwala/softwala-vertical-logo.png') }}" height="35"
                        alt="Softwala logo" loading="lazy" />
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}"
                            href="{{ url('admin/dashboard') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/category*') ? 'active' : '' }}
                {{ request()->is('admin/category/*') ? 'active' : '' }}"
                            href="{{ url('admin/category') }}">
                            Category
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/post*') ? 'active' : '' }}
                {{ request()->is('admin/post/*') ? 'active' : '' }}"
                            href="{{ url('admin/post') }}">
                            Posts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/carousel*') ? 'active' : '' }}
                {{ request()->is('admin/carousel/*') ? 'active' : '' }}"
                            href="{{ url('admin/carousel') }}">
                            Carousel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('admin/gallery') ? 'active' : '' }}
                {{ request()->is('admin/gallery') ? 'active' : '' }}"
                            href="{{ url('admin/gallery') }}">
                            Gallery
                        </a>
                    </li>

                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            <div class="d-flex align-items-center">

                <!-- Avatar -->
                <div class="dropdown">
                    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img @isset($user->profile)
            src="{{ asset('assets/images/website/' . $user->profile) }}"
            @else
            src="{{ asset('assets/images/website/non.png') }}"
            @endisset
                            class="rounded-circle" height="35" alt="Shesh yadav profile" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item fw-bold">
                                Hi, {{ $user->name }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold" href="{{ url('admin/profile') }}">
                                <i class="fas fa-user text-theme"></i> Profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item fw-bold" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt text-theme "></i> Sign-Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</section>
<!-- Navbar Section End -->
