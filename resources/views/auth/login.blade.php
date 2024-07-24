
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Register</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" />
  </head>
  <body>

<section class="signin-section container">
    <div class="container-fluid">
      <!-- ========== title-wrapper start ========== -->
      <div class="title-wrapper pt-30">
       
        <!-- end row -->
      </div>
      <!-- ========== title-wrapper end ========== -->

      <div class="row g-0 auth-row">
        <div class="col-lg-6">
          <div class="auth-cover-wrapper bg-primary-100">
            <div class="auth-cover">
              <div class="title text-center">
                <h1 class="text-primary mb-10">Get Started</h1>
                <p class="text-medium">
                  Start creating the best possible user experience
                  <br class="d-sm-block" />
                  for you customers.
                </p>
              </div>
              <div class="cover-image">
                <img src="{{ asset('backend/assets/images/auth/signin-image.svg') }}" alt="" />
              </div>
              <div class="shape-image">
                <img src="{{ asset('backend/assets/images/auth/shape.svg') }}" alt="" />
              </div>
            </div>
          </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6">
          <div class="signup-wrapper">
            <div class="form-wrapper">
              <h6 class="mb-15">Sign Up Form</h6>
              <p class="text-sm mb-25">
                Start creating the best possible user experience for you
                customers.
              </p>
              <form method="POST"action="{{ route('login') }}">
                @csrf
                <div class="row">

                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Email</label>
                      <input type="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                      @error('email')
                          <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div>
                  <!-- end col -->
                  <div class="col-12">
                    <div class="input-style-1">
                      <label>Password</label>
                      <input type="password"   name="password"
                      required autocomplete="new-password" placeholder="Password" />
                      @error('password')
                          <strong class="text-danger">{{ $message }}</strong>
                      @enderror
                    </div>
                  </div>

                  <!-- end col -->
                 
                  <!-- end col -->
                  <div class="col-12">
                    <div class="button-group d-flex justify-content-center flex-wrap">
                      <button class="main-btn primary-btn btn-hover w-100 text-center">
                        Sign Up
                      </button>
                    </div>
                  </div>

                  <div class="reg text-center mt-5">
                    <span> <a style="color:#000;" href="{{ route('password.request') }}">forget password?</a> &nbsp;| &nbsp; <a href="{{ route('register') }}">Register Now</a></span>
                  </div>
                </div>
                <!-- end row -->
              </form>
         
            </div>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->
    </div>
  </section>



  <!-- ========= All Javascript files linkup ======== -->
  <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ asset('backend/assets/js/Chart.min.js') }} "></script>
  <script src="{{ asset('backend/assets/js/dynamic-pie-chart.js') }} "></script>
  <script src="{{ asset('backend/assets/js/moment.min.js') }} "></script>
  <script src="{{ asset('backend/assets/js/fullcalendar.js') }} "></script>
  <script src="{{ asset('backend/assets/js/jvectormap.min.js') }} "></script>
  <script src="{{ asset('backend/assets/js/world-merc.js') }} "></script>
  <script src="{{ asset('backend/assets/js/polyfill.js') }} "></script>
  <script src="{{ asset('backend/assets/js/main.js') }} "></script>
</body>
</html>