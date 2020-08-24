@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Transaksi</h3>
    </div>
    <div class="col-md-12 ">
    
    <form method="POST" action="">
      
        <div class="form-group">
          <label for="exampleInputEmail1">NISN/NIP</label>
          <input name="NISN/NIP" value=""type="text" class="form-control " id="" placeholder="masukan NISN/NIP">
         </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Peminjam</label>
          <input name="Nama Peminjam" value="" type="text" class="form-control " id="" placeholder=" masukan nama peminjam">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kelas</label>
          <input name="kelas" type="text" class="form-control " id="" placeholder="masukan kelas">
          
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input name="Alamat" value=""type="text" class="form-control " id="" placeholder="masukan Alamat">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">No_HP</label>
          <input name="No_HP" value=""type="text" class="form-control " id="" placeholder="masukan No_HP">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Judul Buku</label>
          <input name="Judul Buku" value=""type="text" class="form-control " id="" placeholder="masukan Judul Buku">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Pinjam</label>
          <input name="Jumlah Pinjam" value=""type="text" class="form-control " id="" placeholder="masukan Jumlah Pinjam">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Waktu Peminjaman</label>
          <input name="Waktu Peminjaman" value=""type="text" class="form-control " id="" placeholder="masukan Waktu Peminjaman">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Waktu Kembali</label>
          <input name="Waktu Kembali" value=""type="text" class="form-control " id="" placeholder="masukan Waktu Kembali">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <input name="Status" value=""type="text" class="form-control " id="" placeholder="masukan Status">
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/petugas" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection
      
