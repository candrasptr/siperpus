<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Input</title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/styleland.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/all.min.css')}}">
</head>
<body>

<div id="bg">
  
  <div class="container-fluid">
    <div class="row">
      <!-- navbar -->
      <nav class="navbar">
        <div class="logo">
          <a href="">
            <img src="images/header.png" height="50px">
          </a>
        </div>
      </nav>

      <!-- konten -->
      <div class="container-fluid">
        <div class="d-sm-flex justify-content-around content">
          <div class="content-left">
            <br><br><br><br>
            <form class="form1" method="POST" action="{{route('isibukutamu')}}">
              @csrf
              <div class="form-group row">
                <label class="col-md-6"><i class="fa fa-address-card"></i> Nisn/nip</label>
                <input name="nisnnip" type="text" class="form-control" id="input" placeholder="Masukan nis">
              </div>
              <div class="form-group row">
                <label class="col-md-6"><i class="fa fa-user"></i> Nama</label>
                <input name="nama_tamu" type="text" class="form-control form-control-md @error('nama_tamu') is-invalid @enderror" id="input" placeholder="Masukan nama">
              </div>
              @error('nama_tamu')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
              <div class="form-group row">
                <label class="col-md-6"><i class="fa fa-users"></i> Kelas</label>
                <input name="kelas_tamu" type="text" class="form-control" id="input" placeholder="Masukan Kelas">
              </div>
              <button type="submit" id="btn" class="btn btn-block btn-primary">Submit</button>
            </form>
          </div>

          <div class="images1">
            <img src="images/konten.png" height="400px">
          </div>
        </div>
      </div>
    </div>  
  </div>

</div>

<script type="text/javascript" src="{{ url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ url('js/all.js')}}"></script>
</body>
</html>