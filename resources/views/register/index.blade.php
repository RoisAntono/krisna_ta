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
    Krisna TA | Daftar Akun
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
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
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card">
            <div class="card-header text-center pt-4">
              <h5>Daftar Akun</h5>
            </div>
            <div class="card-body">
              <form class="needs-validation" action="/register" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <input type="hidden" name="telepon" class="form-control mb-3" value="08">
                <input type="hidden" name="alamat" class="form-control mb-3" value="Jl.">
                <div class="form-grup">
                    <div class="row">
                        <label>Nama Lengkap</label>
                        <div class="col-sm-6">
                            <div class="mb-3">
                              <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="Nama Depan" required>
                              <div class="invalid-feedback">
                                Perlu diisi!
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                              <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Nama Belakang" required>
                              <div class="invalid-feedback">
                                Perlu diisi!
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-grup">
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" required>
                      <div class="invalid-feedback">
                        Perlu diisi!
                      </div>
                    </div>
                </div>
                <div class="form-grup">
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" required>
                      <div class="invalid-feedback">
                        Perlu diisi!
                      </div>
                    </div>
                </div>
                <div class="form-grup">
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                      <div class="invalid-feedback">
                        Perlu diisi!
                      </div>
                    </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar</button>
                </div>
                <p class="text-sm mt-3 mb-0 text-center">Sudah Memiliki akun? <a href="/" class="text-dark font-weight-bolder">Login</a></p>
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
</body>

</html>