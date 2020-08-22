@extends('guest.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-5">
    <div class="col-md-1 ">
      <img src="{{ url('images/LOGO.png') }}" width="100px">
    </div>
    <div class="col-md-3 mt-4">
      <h5 class="text-info">PERPUSTAKAAN SMP NEGERI 1 KALIPUCANG</h5>
    </div>
    <div class="col-md-4 mt-4">
      <h5 id="sb">About</h5><hr>
      <p style="text-align: justify;"> Website ini adalah website resmi perpustakaan SMP NEGERI 1 Kalipucang. Yang dikembangkan dengan tujuan agar siswa siswi di SMP NEGERI 1 Kalipucang bisa dengan mudah meminjam atau membaca buku di perpustakaan dan juga bertujuan untuk meningkatkan literasi bangsa indonesia yang saat ini sangat menurun drastis. semoga dengan adanya website ini literasi di SMP NEGERI 1 Kalipucang bisa meningkat.</p>
    </div>
    <div class="col-md-3 mt-4">
      <h5 id="sb">Developer</h5><hr>
      <p>
        Kelompok 5 RPL A SMKN 1 PADAHERANG <br> 
        <b>ANGGOTA :</b><br>
        Azizah Esha r <br>
        Candra Saputra <br>
        Dati Urbaningrum <br>
        Kurniadi <br>
        Rizqy Resha p <br>
        Romi Hidayat
    </p>
    </div>
  </div>    
</div>              

@endsection