<!--
=========================================================
* Soft UI Dashboard - v1.0.3
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Krisna TA | Login Akun
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- Nucleo Icons -->
  <link href="{{asset("css/nucleo-icons.css")}}" rel="stylesheet" />
  <link href="{{asset("css/nucleo-svg.css")}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset("css/nucleo-svg.css")}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset("css/soft-ui-dashboard.css?v=1.0.3")}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">

  <!-- Notifikasi -->
  <div class="toast-container position-fixed top-0 end-0 p-3">
    <div aria-live="polite" aria-atomic="true" class="position-relative">
      <div class="toast-container top-0 end-0 p-3">
        
        @if(session()->has('loginError'))

        <!-- Then put toasts within -->
        <div class="toast align-items-center text-bg-primary border-0 alert-danger" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">
              <strong>{{ session('loginError') }}</strong>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>

        @elseif (session()->has('success'))

        <!-- Then put toasts within -->
        <div class="toast align-items-center text-bg-primary border-0 alert-success" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
            <div class="toast-body">
              <strong>{{ session('success') }}</strong>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>

        @endif

      </div>
    </div>
  </div>
  <!-- Notifikasi End -->

  <section class="py-8">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card">
            <div class="card-header text-center pt-4">
              <h5>Login</h5>
            </div>
            <div class="card-body">
              <form method="POST" action="/login" class="form text-left" novalidate="">
                @csrf
                <div class="form-grup">
                    <label>Username</label>
                    <div class="mb-3">
                      <input id="username" type="text" class="form-control" name="username" tabindex="1" autofocus required value="{{ old('username') }}">
                    </div>
                </div>
                <div class="form-grup">
                    <label>Password</label>
                    <div class="mb-3">
                      <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Login</button>
                </div>
                <p class="text-sm mt-3 mb-0 text-center">Belum Memiliki akun? <a href="/register" class="text-dark font-weight-bolder">Daftar</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--   Core JS Files   -->
  <script src="{{asset("js/core/popper.min.js")}}"></script>
  <script src="{{asset("js/core/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/plugins/perfect-scrollbar.min.js")}}"></script>
  <script src="{{asset("js/plugins/smooth-scrollbar.min.js")}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset("js/soft-ui-dashboard.min.js?v=1.0.3")}}"></script>

   <script>
    $(document).ready(function(){
      $('.toast').toast('show');
    });
    </script> 
</body>

</html>