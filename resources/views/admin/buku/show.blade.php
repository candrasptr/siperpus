@extends('admin.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <!-- Gambar Buku -->
  <div class="col-md-4">
    <br>
    @if(!empty($row->file_gambar_buku))
      <img src="{{url('images/'.$row->file_gambar_buku)}}" class="d-block w-100 img-fluid">
		@else
      <img src="{{url('images/noimage.png')}}" class="d-block w-100 img-fluid">
		@endif
  </div>
  <div class="col-md-8 mt-3">
    <!-- Judul Buku -->
    <h1>{{$row->judul_buku}}</h1>
    <div class="col-md-12">
      <div class="card border rounded shadow-sm">
      	<!-- Status -->
        @if($row->status === "Tersedia")
        <h5 class="card-header text-success">
        	Tersedia
        </h5>
        @else
        <h5 class="card-header text-danger">
        	Habis
        </h5>
        @endif

        <div class="card-body">
        
              <!-- Input Disembunyikan -->
              <input type="hidden" name="id" value="">
              <input type="hidden" name="nama_produk" value="">

              <!-- Deks buku  -->
              <div class="form-group row">
                <label for="Deksripsi" class="col-md-3 col-form-label col-form-label-md">Deksripsi</label>
                <div class="col-md-9">
                  <textarea type="number" name="Deksripsi" class="form-control form-control-md border bg-light" id="colFormLabelSm" rows="3" disabled>{{$row->deskripsi}}</textarea> 
                </div>
              </div>

              <!-- Sinopsis buku -->
              <div class="form-group row">
                <label for="Sinopsis" class="col-md-3 col-form-label col-form-label-md">Sinopsis</label>
                <div class="col-md-9">
                  <textarea type="number" name="Sinopsis" class="form-control form-control-md border bg-light" id="colFormLabelSm" rows="3" disabled>{{$row->sinopsis}}</textarea> 
                </div>
              </div>

              <!-- Pengarang -->
              <div class="form-group row">
                <label for="Pengarang" class="col-md-3 col-form-label col-form-label-md">Pengarang</label>
                <div class="col-md-5">
                  <input type="text" name="Pengarang" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="{{$row->pengarang}}">
                </div>
              </div>

              <!-- Penerbit -->
              <div class="form-group row">
                <label for="Penerbit" class="col-md-3 col-form-label col-form-label-md">Penerbit</label>
                <div class="col-md-5">
                  <input type="text" name="Penerbit" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="{{$row->penerbit}}">
                </div>
              </div>

              <!-- Kategori -->
              <div class="form-group row">
                <label for="Kategori" class="col-md-3 col-form-label col-form-label-md">Kategori</label>
                <div class="col-md-5">
                  <?php $value=old('kategori',$row->id_kategori);?>
                  <select name="kategori" class="form-control @error('kategori') is-invalid @enderror" disabled>
                    <option>Pilih : </option>
                      @foreach(App\Kategori::orderBy('nama_kategori','asc')->get() as $kategori)
                        <option value="{{$kategori->id_kategori}}" {{ $value == $kategori->id_kategori ? 'selected' : ''}}>
                            {{$kategori->nama_kategori}}
                        </option>
                      @endforeach
                  </select>
                  @error('kategori')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
              </div>

              <!-- Ruangan -->
              <div class="form-group row">
                <label for="Ruangan" class="col-md-3 col-form-label col-form-label-md">Ruangan</label>
                <div class="col-md-2">
                  <?php $value=old('ruangan',$row->id_ruangan);?>
                  <select name="ruangan" class="form-control @error('ruangan') is-invalid @enderror" disabled>
                    <option>Pilih : </option>
                    @foreach(App\Ruangan::orderBy('kode_ruangan','asc')->get() as $ruangan)
                    <option value="{{$ruangan->id_ruangan}}" {{ $value == $ruangan->id_ruangan ? 'selected' : ''}}>
                    {{$ruangan->kode_ruangan}}
                    </option>
                    @endforeach
                  </select>
                </div>
              </div>

              <!-- Jumlah buku -->
              <div class="form-group row">
                <label for="Jumlah buku" class="col-md-3 col-form-label col-form-label-md">Jumlah buku Total</label>
                <div class="col-md-2">
                  <input type="text" name="Jumlah buku" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="{{$row->jumlah_buku_total}}">
                </div>
                <label for="Jumlah buku" class="col-md-3 col-form-label col-form-label-md">Jumlah buku</label>
                <div class="col-md-2">
                  <input type="text" name="Jumlah buku" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="{{$row->jumlah_buku}}">
                </div>
                <label for="jumlah" class="col-md-3 col-form-label col-form-label-md mt-2">Buku diluar</label>
                <div class="col-md-2 mt-2">
                  <input type="text" name="jumlah" class="form-control form-control-md border bg-light" id="colFormLabelSm" disabled value="{{$row->jumlah_buku_diluar}}">
                </div>
              </div>
              <a href="{{route('buku.index')}}" class="btn btn-danger">Kembali</a> 
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