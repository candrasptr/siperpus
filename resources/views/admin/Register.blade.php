<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <link rel="icon" type="image/png" href="">
  <link href="{{ url('icon/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles-->
  <link href="{{ url('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body>

  <div class="container">
    <br><br>
    <div class="card o-hidden border-0 shadow-lg my-5 rounded shadow-lg">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-4 offset-lg-1 m-auto">
            <img class="mx-auto d-block" src="{{ url('images/LOGO.png') }}" width="100px"><br>
            <h3 style="font-size: 19px; color: black; text-align: center;">Selamat datang di Perpustakaan <br> SMP Negeri 1 Kalipucang</h3>
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              </div>
              <form class="user" method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="name" autocomplete="off" name="name" placeholder="Masukan nama" value="">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" autocomplete="off" id="email" name="email" placeholder="Email Address" value="">


                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">

                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
              <hr>
              
              <div class="text-center">
                <p class="small">Sudah punya akun?<a href="/loginuser"> Login!</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- JavaScript-->
  <script src="{{url('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{url('js/bootstrap.bundle.min.js') }}"></script>

  <!-- JavaScript-->
  <script src="{{url('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom script-->
  <script src="{{url('js/sb-admin-2.min.js') }}"></script>

</body>

</html>
