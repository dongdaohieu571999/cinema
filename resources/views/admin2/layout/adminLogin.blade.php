<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('AdminCSS/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminCSS/assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('AdminCSS/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('AdminCSS/assets/images/favicon.ico') }}">
  </head>
  <body data-new-gr-c-s-check-loaded="14.1101.0" data-gr-ext-installed="">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="AdminCSS\assets\images\Logo_AP.png">
                </div>
                <h4>Hello! Welcome to M2M Admin Panel</h4>
                <form class="pt-3" action="{{route('auth.login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                    </div>                  
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
    <script src="{{ asset('AdminCSS/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('AdminCSS/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('AdminCSS/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('AdminCSS/assets/js/misc.js') }}"></script>
    <!-- endinject -->
  
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>