@extends('admin.master')


@section('konten')

<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Input data Transaksi</h3>
    </div>

    <div class="col-md-12 ">
    <form action="{{route('transaksi.store')}}" method="POST">

      @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">NISN/NIP</label>
          <input name="nisnnip" value=""type="text" class="form-control" id="" placeholder="masukan NISN/NIP">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Nama Peminjam</label>
          <input name="Nama_Peminjam" value="" type="text" class="form-control @error('Nama_Peminjam') is-invalid @enderror " id="" placeholder=" masukan nama peminjam">
          @error('Nama_Peminjam')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Kelas</label>
          <input name="kelas" type="text" class="form-control" id="" placeholder="masukan kelas">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat</label>
          <input name="Alamat" value=""type="text" class="form-control @error('Alamat') is-invalid @enderror " id="" placeholder="masukan Alamat">
          @error('Alamat')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">No. HP</label>
          <input name="No_HP" value=""type="text" class="form-control" id="" placeholder="masukan No. HP">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Judul Buku</label>
          <select 
          class       = "form-control select2"
          name        = "id_buku" 
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
          <input name="Jumlah_Pinjam" value="1" type="number" class="form-control @error('Jumlah_Pinjam') is-invalid @enderror " id="" placeholder="masukan Jumlah Pinjam">
          @error('Jumlah_Pinjam')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
         </div>

         <div class="form-group">
          <label for="exampleInputEmail1">Lama Pinjam</label>
          <input name="lama_pinjam" value="0" type="number" class="col-md-2 form-control" id="hari" placeholder="Masukan lama pinjam dengan hitungan hari">
         </div>

         <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Pinjam</label>
          <input name="Tanggal_Peminjaman" value="" type="date" class="col-md-2 form-control" id="date1" onchange="setSecondDate();" placeholder="masukan Waktu Peminjaman">
         </div>

         <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Kembali</label>
          <input name="Tanggal_Kembali" value="" type="date" class="col-md-2 form-control" id="date2" placeholder="masukan Waktu Kembali">
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('inputtransaksi')}}" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

<script>
  var today = new Date();
  var dd = ("0" + (today.getDate())).slice(-2);
  var mm = ("0" + (today.getMonth() +　1)).slice(-2);
  var yyyy = today.getFullYear();
  today = yyyy + '-' + mm + '-' + dd ;
  $("#date1").attr("value", today);
  $("#date2").attr("value", today);
</script>
    
<script>

  function setSecondDate() {
    var days = document.getElementById("hari").value;
    var date = new Date(document.getElementById("date1").value);
    date.setDate(date.getDate() + parseInt(days));
    document.getElementById("date2").valueAsDate = date;
}
</script>


@endsection
      
