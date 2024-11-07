<!DOCTYPE html>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <title>Sistem Informasi Pegawai</title>
  </head>
  <body class="h-100 bg-primary d-flex align-items-center">
    <!-- Login -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
          <h3 class="text-center text-primary pb-3 mb-3 border-bottom">Login Aplikasi</h3>
          <!-- Form -->
          <form method="post" action="ceklogin.php">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Username" name="username" />
            <div class="input-group mb-3">
              <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" id="password" />
              <span class="input-group-text">
                <i class="bi bi-eye-slash" id="togglePassword" style="cursor: pointer;"></i>
              </span>
            </div>
            <div class="d-grid gap-2">
              <input type="submit" class="btn btn-primary btn-lg text-white" value="Login" />
            </div>
          </form>
          <!-- End Form -->
          <div class="text-center mt-3">
            <p>Belum punya akun? <a href="register.php">Register di sini</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Script untuk toggle password visibility -->
    <script>
      const togglePassword = document.querySelector('#togglePassword');
      const password = document.querySelector('#password');

      togglePassword.addEventListener('click', function (e) {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('bi-eye');
        this.classList.toggle('bi-eye-slash');
      });
    </script>

  </body>
</html>
