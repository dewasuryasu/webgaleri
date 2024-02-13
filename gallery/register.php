<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Halaman Registrasi | Web Gallery</title>
</head>
<body class="bg-secondary">
    <form action="proses_register.php" method="post">
    <div class="container">
    <div class="row justify-content-center align-items-center flex-column" style="height: 100vh">

      <div class="col-md-6 col-lg-4 col-10 p-4 p-md-5 shadow-sm rounded-4 bg-white">
        <p class="text-center fs-3 fw-bold mb-5 pb-3">REGISTER</p>
        <form method="post">
          <div class="my-4 border-bottom py-1">
            <input type="text" class="form-control py-2 border-0" name="username" placeholder="username" />
          </div>
          <div class="my-4 border-bottom py-1">
            <input type="email" class="form-control py-2 border-0" name="email" placeholder="email" />
          </div>
          <div class="my-4 border-bottom py-1">
            <input type="password" class="form-control py-2 border-0" name="password" placeholder="password" />
          </div>
          <div class="my-4 border-bottom py-1">
            <input type="password" class="form-control py-2 border-0" name="confirm_pw"
              placeholder="confirm password" />
          </div>
          <div class="my-4 border-bottom py-1">
            <input type="text" class="form-control py-2 border-0" name="namalengkap" placeholder="namalengkap" />
          </div>
          <div class="my-4 border-bottom py-1">
            <input type="text" class="form-control py-2 border-0" name="alamat" placeholder="alamat" />
          </div>
          <div class="my-4">
            <button class="btn btn-dark w-100 py-3" type="submit" name="signupBtn">
              Sign Up
            </button>
          </div>
        </form>
        <div class="my-4">
          <p class="text-center">-OR-</p>
        </div>
        <div class="my-4">
          <p class="text-center">
            Already have an account? <a href="login.php">Sign In</a>
          </p>
        </div>
      </div>
    </div>
  </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>