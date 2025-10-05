<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Login | {{config('app.name')}}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular, and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon"> 
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link">
    <link rel="stylesheet" href="{{asset('assets/css/style-preset.css')}}">
  </head>
  <!-- [Head] end -->
  
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-2">
            <div class="card-body">
              <a href="{{url('/')}}" class="d-flex justify-content-center">
                <img src="{{asset('logo.png')}}" width="140" alt="Logo" class="img-fluid ">
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                      <h2 class="text-secondary mt-3"><b>{{config('app.name')}}</b></h2>
                  </div>
                </div>
              </div>
              <div class="saprator mt-2"></div>
              <h5 class="my-3 d-flex justify-content-center">Sign in with Username</h5>
              
              <!-- [Display Error Message] -->
              @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
              @endif
              
              <!-- [Form start] -->
              <form action="{{url('login/check_login')}}" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username">
                  <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="password" id="floatingInput1" placeholder="Password">
                  <label for="floatingInput1">Password</label>
                </div>
                
                <div class="d-grid mt-4">
                  <button type="submit" class="btn btn-secondary">Sign In</button>
                </div>
              </form>
              <!-- [Form end] -->
              
              <hr>
              <!-- <h5 class="d-flex justify-content-center">Don't have an account?</h5> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <script src="{{asset('assets/js/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/fonts/custom-font.js')}}"></script>
    <script src="{{asset('assets/js/pcoded.js')}}"></script>
    <script src="{{asset('assets/js/plugins/feather.min.js')}}"></script>

    <script>
      document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
      });

      document.addEventListener('keydown', function(e) {
      // Prevent F12
      if (e.key === 'F12') {
        e.preventDefault();
        return;
      }
      
      // Prevent Ctrl+U, Ctrl+I, and Ctrl+Shift+I
      if (e.ctrlKey && (e.key === 'u' || e.key === 'U' || e.key === 'i' || e.key === 'I' || (e.shiftKey && e.key === 'I'))) {
        e.preventDefault();
      }
    });

      layout_change('light');
      font_change("Roboto");
      change_box_container('false');
      layout_caption_change('true');
      layout_rtl_change('false');
      preset_change("preset-1");
    </script>
  </body>
  <!-- [Body] end -->
</html>
