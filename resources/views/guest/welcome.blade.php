<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="icon" type="image/png" href="{{ url('images/favicon.png') }}">

    <!-- css bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">

    <!-- css fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ url('icon/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('icon/css/fontawesome.min.css') }}">

    <!-- css native -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- bootstrap and javascript online -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <!-- judul -->
    <title>SMPN 1 KALIPUCANG</title>


</head>
<body>

  <!-- header content -->
  <div class="container-fluid">
    <div class="row">
      <div id="persegi">
        <br>
        <h3 class="text-center "><img class="logo" src="{{ url('images/LOGO.png') }}"></h3>
        <h4 id="bo" class="text-center text-light">PERPUSTAKAAN</h4>
        <h4 id="bo" class="text-center text-light">SMP NEGERI 1 KALIPUCANG</h4>
        <div class="col-md-4 offset-md-4 mt-2">
        </div>
      </div>
    </div>
  </div>
  <!-- end header content -->

 
      <!-- navbar -->
            <nav id="navbar" class="navbar navbar-expand-sm shadow">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <div class="col-md-12">
                    <ul class="navbar-nav justify-content-center mt-2 mt-sm-0 ">
                      <li class="nav-item active mr-5">
                        <a id="re" class="nav-link text-dark" href="/">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active mr-5">
                        <a id="re" class="nav-link text-dark" href="/daftarbuku">Buku <span class="sr-only">(current)</span></a>
                      </li>
                      <li id="re" class="nav-item">
                        <a id="re" class="nav-link text-dark" href="/about">About</a>
                      </li>
                    </ul>
                  </div>            
              </div>
            </nav>
         <!-- end navbar -->

              <!-- banner -->
              <!-- end banner -->

              <!-- <div class="row mt-5">
                <div class="col-md-12">
                  <h4 class="text-center" id="sb">Profile <hr id="hr"></h4>
                </div>
              </div> -->


               <!-- Selamat datang -->
               <!-- <div class="container-fluid">
                 <div class="row">
                   <div class="col-md-5 offset-md-1 mt-5">
                     <h5 id="sb">Selamat datang di</h5><h5 id="tp"><span>SMPN 1 KALIPUCANG <hr class="garis"></span></h5>
                     <p class="mt-3">Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho Lorem ipsum sit dolor amet ya kan baka aho</p>
                     <a href="/salam" id="btnselengkapnya" class="btn btn-info"><span id="re" class="text-light">Selengkapnya</span></a>
                   </div>
                   <div class="col-md-5 mt-5">
                     <div id="images1"></div>
                   </div>
                 </div>
               </div> -->
               <!-- end selamat datang -->

               <!-- daftar buku -->
               <!-- <div class="container-fluid mt-5 ">
                 <div class="row">
                   <div class="col-md-12">
                     <h4 class="text-center" id="sb">Daftar Buku <hr id="hr"></h4>
                   </div>
                   <div class="col-md-3 offset-md-2 mt-3">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="/pinjambuku" class="btn btn-info btn-sm btn-block">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 mt-3">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="#" class="btn btn-info btn-sm btn-block">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 mt-3">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="#" class="btn btn-info btn-sm btn-block ">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 mt-3 offset-md-2">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="/pinjambuku" class="btn btn-info btn-sm btn-block">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 mt-3">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="/pinjambuku" class="btn btn-info btn-sm btn-block">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-3 mt-3">
                     <div class="card" style="width: 14rem;">
                       <img class="card-img-top" style="width: 200px;" src="{{ url('images/mantappu.jpg') }}" alt="Foto buku">
                       <div class="card-body">
                         <h5 class="card-title">Matematika Kelas VII</h5>
                         <a href="/pinjambuku" class="btn btn-info btn-sm btn-block">Selengkapnya</a>
                       </div>
                     </div>
                   </div>
                   <div class="col-md-2 offset-md-5">
                       <a href="/daftarbuku" id="btnsemua" class="btn btn-info shadow-sm mx-auto d-block"><span id="re" class="text-light text-center">Semua Buku</span></a>
                   </div>
                 </div>
               </div> -->
               <!-- end daftar buku -->

               <!-- go -->
               <!-- Page Content -->
               <div class="container mt-5">

                 <!-- Page Heading -->
                 <div class="row">
                  <div class="col-md-12">
                    <h4 class="text-center mb-4" id="sb">Daftar Buku <hr id="hr"></h4>
                  </div>
                  @foreach($data as $row)
                   <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                     <div class="card h-100">
                       <a href="#"><img class="card-img-top" src="{{ url('images/'.$row->file_gambar_buku) }}" alt=""></a>
                       <div class="card-body">
                         <h4 class="card-title">
                         <a href="">{{$row->judul_buku}}</a>
                         </h4>
                         <p class="card-text">{{$row->deskripsi}}</p> 
                       </div>
                       <div class="card-footer"><a href="" class="btn btn-info btn-block">Selengkapnya</a></div>
                     </div>
                   </div>
                   @endforeach
                   
                 </div>
                 <!-- /.row -->

                 <ul class="pagination justify-content-center">
                   <a href="/daftarbuku" id="btnsemua" class="btn btn-info px-5">Semua buku</a>
                 </ul>

               </div>
               <!-- /.container -->
               <!-- end -->



        
      
        <!-- footer -->
        <div class="container-fluid" id="footer">
          <div class="row">
              <div class="col-md-3 offset-md-1 mt-5">
                <h10 id="tp" class="text-info"><img class="logofooter" src="{{ url('images/LOGO.png') }}">PERPUSTAKAAN</h10><br>
                <h10 id="tp" class="text-info">SMP NEGERI 1 KALIPUCANG</h10>
                <p id="alamat" class="mt-2">SMPN 1 Kalipucang <br> Jalan aaaaa No.111 Kalipucang pangandaran</p>
              </div>
              <div class="col-md-2 mt-5">
                <span class="text-light" id="sb">Hubungi kami <hr class="footer"></span>
                <i class="fa fa-phone text-light fa-1x"></i><span class="text-light" id="footertext">0812-3456-7890</span><br>
                <i class="fa fa-envelope text-light fa-1x mt-1"></i><span class="text-light mt-1" id="footertext">smpn1kalipucang@sch.id</span>
              </div>
              <div class="col-md-2 mt-5">
                <span class="text-light" id="sb">Link <hr class="footer"></span>
                <a href="" id="footertext" class="text-light">Kemendikbud</a><br>
                <a href="" id="footertext" class="text-light">SMP Negeri 1 Kalipucang</a>
              </div>
          </div>
        </div>
        <div class="container-fluid" id="footerdua">
          <div class="row">
            <div class="col-md-8 offset-md-1">
              <i class="fa fa-copyright" id="iconcopy"></i><span id="copy"> Copyright 2020 | Powered by Kelompok 5 PKL RPL SMKN 1 Padaherang</span>
            </div>
            <div class="col-md-2">
              <a href="/" id="copy">Home</a> | <a href="/about" id="copy">About</a>
            </div>
          </div>
        </div>
        <!-- end footer -->

    <!-- bootstrap js and fontawesome js -->
    <script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/jquery.slim.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/pooper.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('icon/js/fontawesome.min.js') }}"></script>
</body>
</html>