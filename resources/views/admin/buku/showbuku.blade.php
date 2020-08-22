@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <!-- Gambar Buku -->
  <div class="col-md-4">
    <br>
    <img src="{{ url('images/mantappu.jpg') }}" class="d-block w-100 img-fluid">
  </div>
  <div class="col-md-8 mt-3">
    <!-- Judul Buku -->
    <h1>Matematika Kelas XII</h1>
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

              <!-- Deks buku  -->
              <div class="form-group row">
                <label for="Deksripsi" class="col-md-3 col-form-label col-form-label-md">Deksripsi</label>
                <div class="col-md-9">
                  <textarea type="number" name="Deksripsi" class="form-control form-control-md border bg-light" id="colFormLabelSm" rows="3" disabled>Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes</textarea> 
                </div>
              </div>

              <!-- Sinopsis buku -->
              <div class="form-group row">
                <label for="Sinopsis" class="col-md-3 col-form-label col-form-label-md">Sinopsis</label>
                <div class="col-md-9">
                  <textarea type="number" name="Sinopsis" class="form-control form-control-md border bg-light" id="colFormLabelSm" rows="3" disabled>Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes Lorem ipsum dolor sit amtes</textarea> 
                </div>
              </div>

              <!-- Jumlah -->
              <div class="form-group row">
                <label for="jumlah" class="col-md-3 col-form-label col-form-label-md">Jumlah</label>
                <div class="col-md-2 col-md-offset-7">
                  <input type="number" name="jumlah" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="100">
                </div>
              </div>

              <!-- Pengarang -->
              <div class="form-group row">
                <label for="Pengarang" class="col-md-3 col-form-label col-form-label-md">Pengarang</label>
                <div class="col-md-5">
                  <input type="text" name="Pengarang" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="Lorem ipsum">
                </div>
              </div>

              <!-- Penerbit -->
              <div class="form-group row">
                <label for="Penerbit" class="col-md-3 col-form-label col-form-label-md">Penerbit</label>
                <div class="col-md-5">
                  <input type="text" name="Penerbit" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="Dolor sit amets">
                </div>
              </div>

              <!-- Kategori -->
              <div class="form-group row">
                <label for="Kategori" class="col-md-3 col-form-label col-form-label-md">Kategori</label>
                <div class="col-md-5">
                  <input type="text" name="Kategori" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="Buku pelajaran">
                </div>
              </div>

              <!-- Ruangan -->
              <div class="form-group row">
                <label for="Ruangan" class="col-md-3 col-form-label col-form-label-md">Ruangan</label>
                <div class="col-md-2">
                  <input type="text" name="Ruangan" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="Blok a">
                </div>
              </div>

              <!-- Jumlah buku -->
              <div class="form-group row">
                <label for="Jumlah buku" class="col-md-3 col-form-label col-form-label-md">Jumlah buku</label>
                <div class="col-md-2">
                  <input type="text" name="Jumlah buku" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="100">
                </div>
                <label for="jumlah" class="col-md-3 col-form-label col-form-label-md">Buku diluar</label>
                <div class="col-md-2">
                  <input type="text" name="jumlah" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="100">
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