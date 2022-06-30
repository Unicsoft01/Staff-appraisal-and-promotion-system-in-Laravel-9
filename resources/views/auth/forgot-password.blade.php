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
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('backend_asset/images/logo.svg')}}" alt="logo">
              </div>
              <h5>
                  {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
              </h5>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mt-5 form-group">
                  <input id="email" type="email" name="email" :value="old('email')" required autofocus class="form-control form-control-lg" placeholder="Enter a Verified Email address">
                </div>
                <div class="mb-2 flex items-center justify-end">
                  <a type="button" href="/login" class="btn btn-secondary auth-form-btn">
                    {{ __('Cancel') }}
                  </a>
                  <button class="btn btn-primary auth-form-btn">
                    {{ __('Email Password Reset Link') }}
                  </button>
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
