<!-- Footer Section Start-->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
          <!-- Left -->
          <div class="me-5 d-none d-lg-block">
            <span class="form-text fw-bold">Get connected with us on social networks:</span>
          </div>
          <!-- Left -->

          <!-- Right -->
          <div>
            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('facebook')}}"
                target="_blank"
                role="button">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('twitter')}}"
                target="_blank"
                role="button">
                <i class="fab fa-twitter"></i>
            </a>

            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('instagram')}}"
                target="_blank"
                role="button">
                <i class="fab fa-instagram"></i>
            </a>

            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('linkedin')}}"
                target="_blank"
                role="button">
                <i class="fab fa-linkedin"></i>
            </a>

            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('pinterest')}}"
                target="_blank"
                role="button">
                <i class="fab fa-pinterest"></i>
            </a>

            <a
                class="btn btn-sm text-white btn-lg btn-floating btn-theme"
                href="{{site('whatsapplink')}}"
                target="_blank"
                role="button">
                <i class="fab fa-whatsapp"></i>
            </a>

          </div>
          <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="form-text fw-bold">
          <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                  <img
                    src="{{asset('assets/images/softwala/softwala.png')}}"
                    alt="softwala logo"
                    height="100px"/>
                </h6>
                <p>
                  {{site('description')}}
                  <p><strong>!! Happy Coding !!</strong></p>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-decoration-underline">Useful links</h6>
                <p><a class="nav-link" href="{{url('about-us')}}">About US</a></p>
                <p><a class="nav-link" href="{{url('privacy-policy')}}">Privacy Policy</a></p>
                <p><a class="nav-link" href="{{url('terms-conditions')}}">Terms & Conditions</a></p>
                <p><a class="nav-link" href="{{url('disclaimer')}}">Disclaimer</a></p>
                <p><a class="nav-link" href="{{url('advertisement')}}">Advertisement</a></p>
                <p><a class="nav-link" href="{{url('quick-links')}}">Quick links</a></p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4 text-decoration-underline">Contact</h6>
                <p><i class="fas fa-home me-3 text-theme"></i> {{site('address')}}</p>
                <p><i class="fas fa-envelope me-3 text-theme"></i> {{site('email')}}</p>
                <p><i class="fas fa-phone me-3 text-theme"></i> + 91 {{site('call')}}</p>
                <p><i class="fas fa-message me-3 text-theme"></i> + 91 {{site('whatsapp')}}</p>
                <!-- subscribe section -->
                <form id="subscriberForm" action="" method="post">
                    <div class="fw-bold">Subscribe to the Email Newsletter</div>
                    <div class="input-group">
                        <input
                            type="email"
                            name="subscriber_email"
                            id="subscriber_email"
                            placeholder="Enter Your Email ID"
                            class="form-control"
                            required
                        />
                        <button type="submit" id="submit_button" class="btn btn-theme">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
                <!-- subscribe section -->
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-2 bg-theme text-light">
          © <script>document.write(new Date().getFullYear())</script> Copyright All Rights Reserved :
          <a class="fw-bold text-light" href="{{url('/')}}">softwala.com</a><br/>
          <span class="form-text fw-bold text-light">We try to provide best coding solutions.</span>
        </div>
        <!-- Copyright -->
    </footer>
<!-- Footer Section End -->
