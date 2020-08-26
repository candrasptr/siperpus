@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
    <!-- Judul Buku -->
    <h1>{{$row->judul_buku}}</h1>
    <div class="col-md-12">
      <div class="card border rounded shadow-sm">
      	<!-- Status -->

        @if($row->status === "DIPINJAM")
        <h5 class="card-header text-warning">
        	DIPINJAM
        </h5>
        @elseif($row->status === "KADALUARSA")
        <h5 class="card-header text-danger">
        	KADALUARSA
        </h5>
        @elseif($row->status === "DIPESAN")
        <h5 class="card-header text-primary">
        	DIPESAN
        </h5>
        @else
        <h5 class="card-header text-success">
        	SELESAI
        </h5>
        @endif

        <div class="card-body">
        
              <!-- Input Disembunyikan -->
              <input type="hidden" name="id" value="">
              <input type="hidden" name="nama_produk" value="">

              <!-- Nama peminjam -->
              <div class="form-group row">
                <label for="Namapeminjam" class="col-md-3 col-form-label col-form-label-md">Nama peminjam</label>
                <div class="col-md-9">
                  <input value="{{$row->nama_peminjam}}" type="text" name="Namapeminjam" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Kelas -->
              <div class="form-group row">
                <label for="Kelas" class="col-md-3 col-form-label col-form-label-md">Kelas peminjam</label>
                <div class="col-md-9">
                  <input value="{{$row->kelas_peminjam}}" type="text" name="Kelas" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Alamat -->
              <div class="form-group row">
                <label for="Alamat" class="col-md-3 col-form-label col-form-label-md">Alamat peminjam</label>
                <div class="col-md-9">
                  <textarea class="form-control form-control-md border bg-light" name="Alamat" disabled>{{$row->alamat_peminjam}}</textarea>
                </div>
              </div>

              <!-- Nohp -->
              <div class="form-group row">
                <label for="Nohp" class="col-md-3 col-form-label col-form-label-md">No hp peminjam</label>
                <div class="col-md-9">
                  <input value="{{$row->nohp_peminjam}}" type="text" name="Nohp" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Waktupinjam -->
              <div class="form-group row">
                <label for="Waktupinjam" class="col-md-3 col-form-label col-form-label-md">Waktu peminjaman</label>
                <div class="col-md-3">
                  <input value="{{$row->tanggal_peminjaman}}" type="date" name="Waktupinjam" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
                <label for="waktukembali" class="col-md-2 col-form-label col-form-label-md">kembali</label>
                <div class="col-md-4">
                <input value="{{$row->tanggal_kembali}}" type="date" name="Waktupinjam" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Jumlah -->
              <div class="form-group row">
                <label for="Jumlah" class="col-md-3 col-form-label col-form-label-md">Jumlah peminjam</label>
                <div class="col-md-3">
                  <input value="{{$row->jumlah_pinjam}}" type="text" name="Jumlah" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
                </div>
              </div>

              <!-- Status -->
              <div class="form-group row">
                <label for="Status" class="col-md-3 col-form-label col-form-label-md">Status</label>
                <div class="col-md-3">
                  <input value="{{$row->status}}" type="text" name="Status" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="">
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