<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('backend_asset/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('backend_asset/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('backend_asset/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('backend_asset/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('backend_asset/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="{{asset('backend_asset/images/logo.svg')}}" alt="logo"> -->
                PAAU STAFF APPRAISAL
              </div>
              <h4>Hello! Dear guest</h4>
              <h6 class="font-weight-light">Register to continue.</h6>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4 text-muted" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

            <form method="POST" class="pt-3" action="{{route('login') }}">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" :value="old('username')" required autofocus  placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" :value="old('username')" required autofocus  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" :value="old('username')" required autofocus  placeholder="Account type">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="username" name="username" :value="old('username')" required autofocus  placeholder="Department">
                </div>

                <div class="form-group">
                  <input type="date" class="form-control form-control-lg" id="username" name="username" :value="old('username')" required autofocus  placeholder="Enter date of birth">
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" required autocomplete="current-password">
                </div>
                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="{ {  asset('backend_asset/index.html">SIGN IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" name="remember">
                     {{ __('I agree to all Terms & Conditions
') }} 
                    </label>
                  </div>
                </div>
                <div class="mb-2">
                  <button class="btn btn-block btn-primary auth-form-btn">
                    {{ __('register') }}
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                 Already have an account? <a href="{{route('login')}}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('backend_asset/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('backend_asset/js/off-canvas.js')}}"></script>
  <script src="{{asset('backend_asset/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('backend_asset/js/template.js')}}"></script>
  <script src="{{asset('backend_asset/js/settings.js')}}"></script>
  <script src="{{asset('backend_asset/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>

