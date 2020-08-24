@extends('admin.master')


@section('konten')

<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Input data Transaksi</h3>
    </div>

    <div class="col-md-4 offset-md-8">
      <form action="?" method="GET">
        <div class="input-group mb-3">
            <input name="keyword" id="carikategori" type="text" class="form-control" placeholder="Masukan ID Transaksi" aria-label="Cari" aria-describedby="button-addon2" value="{{ Request()->keyword }}">
           <div class="input-group-append">
            <button id="btncarikategori" class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-12 ">
    <form method="POST" action="">
        <div class="form-group">
          <label for="exampleInputEmail1">NISN/NIP</label>
          <input name="nisnnip" value=""type="text" class="form-control " id="" placeholder="masukan NISN/NIP">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Peminjam</label>
          <input name="Nama_Peminjam" value="" type="text" class="form-control " id="" placeholder=" masukan nama peminjam">
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
          <label for="exampleInputEmail1">No. HP</label>
          <input name="No_HP" value=""type="text" class="form-control " id="" placeholder="masukan No. HP">
         </div>
         <div class="form-group">
          <label for="exampleFormControlSelect1">Judul Buku</label>
          <select 
          class       = "form-control select2"
          name        = "judul_buku" 
          id          = "exampleFormControlSelect1" 
          searchable  = "Cari.."
          style       = ".select2-container .select2-selection--single{height:34px !important;}.select2-container--default .select2-selection--single{border: 1px solid #ccc !important; border-radius: 0px !important; }">
          @foreach($buku as $buku)
            <option value="{{$buku->id_buku}}">{{$buku->judul_buku}}</option>
          @endforeach
          </select>
        </div>

         <div id="list-buku"></div>
         <div class="form-group">
          <label for="exampleInputEmail1">Jumlah Pinjam</label>
          <input name="Jumlah_Pinjam" value=""type="text" class="form-control " id="" placeholder="masukan Jumlah Pinjam">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Waktu Peminjaman</label>
          <input name="Waktu_Peminjaman" value="" type="date" class="form-control " id="datetimepicker" placeholder="masukan Waktu Peminjaman">
         </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Waktu Kembali</label>
          <input name="Waktu Kembali" value=""type="date" class="form-control " id="" placeholder="masukan Waktu Kembali">
         </div>
         <div class="form-group">
          <label for="exampleFormControlSelect1">Example select</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1">
            <option value="PESAN">PESAN</option>
            <option value="PINJAM">PINJAM</option>
            <option value="KADALUARSA">KADALUARSA</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/petugas" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>
    
</script>


@endsection
      
