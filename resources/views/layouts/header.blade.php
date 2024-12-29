<!-- Navbar Section Start -->
<section id="navbar_section">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-theme">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars text-light"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="{{asset('assets/images/softwala/softwala-vertical-logo.png')}}"
            height="35"
            alt="Softwala logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
                class="nav-link {{request()->is('/') ? 'active':''}}"
                href="{{url('/')}}">
                Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link {{request()->is('category*') ? 'active':''}}"
                href="{{url('category')}}">
                Category
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link {{request()->is('post') ? 'active':''}}"
                href="{{url('post')}}">
                Post
            </a>
          </li>
          {{-- <li class="nav-item">
            <a
                class="nav-link {{request()->is('tools') ? 'active':''}}"
                href="{{url('tools')}}">
                Tools
            </a>
          </li> --}}
          <li class="nav-item">
            <a
                class="nav-link {{request()->is('about-us') ? 'active':''}}"
                href="{{url('about-us')}}">
                About Us
            </a>
          </li>
          <li class="nav-item">
            <a
                class="nav-link {{request()->is('contact-us') ? 'active':''}}"
                href="{{url('contact-us')}}">
                Contact Us
            </a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
</section>
<!-- Navbar Section End -->
