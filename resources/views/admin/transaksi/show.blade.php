@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <!-- Gambar Buku -->
  <div class="col-md-4">
    <br>
      <img src="{{url('images/mantappu.jpg')}}" class="d-block w-100 img-fluid">
  </div>
  <div class="col-md-8 mt-3">
    <!-- Judul Buku -->
    <h1>Matematika</h1>
    <div class="col-md-12">
      <div class="card border rounded shadow-sm">
      	<!-- Status -->
        <h5 class="card-header text-success">
        	Tersedia
        </h5>

        <div class="card-body">
        
              <!-- Input Disembunyikan -->
              <input type="hidden" name="id" value="">
              <input type="hidden" name="nama_produk" value="">

              <!-- Nama peminjam -->
              <div class="form-group row">
                <label for="Namapeminjam" class="col-md-3 col-form-label col-form-label-md">Nama peminjam</label>
                <div class="col-md-9">
                  <input type="text" name="Namapeminjam" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Kelas -->
              <div class="form-group row">
                <label for="Kelas" class="col-md-3 col-form-label col-form-label-md">Kelas peminjam</label>
                <div class="col-md-9">
                  <input type="text" name="Kelas" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Alamat -->
              <div class="form-group row">
                <label for="Alamat" class="col-md-3 col-form-label col-form-label-md">Alamat peminjam</label>
                <div class="col-md-9">
                  <textarea class="form-control form-control-md border bg-light" name="Alamat" disabled></textarea>
                </div>
              </div>

              <!-- Nohp -->
              <div class="form-group row">
                <label for="Nohp" class="col-md-3 col-form-label col-form-label-md">No hp peminjam</label>
                <div class="col-md-9">
                  <input type="text" name="Nohp" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Waktupinjam -->
              <div class="form-group row">
                <label for="Waktupinjam" class="col-md-3 col-form-label col-form-label-md">Waktu peminjaman</label>
                <div class="col-md-3">
                  <input type="date" name="Waktupinjam" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
                <label for="waktukembali" class="col-md-2 col-form-label col-form-label-md">kembali</label>
                <div class="col-md-4">
                  <input type="date" name="waktukembali" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Jumlah -->
              <div class="form-group row">
                <label for="Jumlah" class="col-md-3 col-form-label col-form-label-md">Jumlah peminjam</label>
                <div class="col-md-3">
                  <input type="text" name="Jumlah" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Status -->
              <div class="form-group row">
                <label for="Status" class="col-md-3 col-form-label col-form-label-md">Status</label>
                <div class="col-md-3">
                  <input type="text" name="Status" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>
              <a href="?page=home" class="btn btn-danger">Kembali</a> 
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>

@endsection