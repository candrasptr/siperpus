@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Create Buku</h3>
    </div>
    <div class="col-md-12">
      <form action="{{route('buku.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="form-control" id="inputGambar" placeholder=" masukan file gambar buku" name="gambar">
            <label class="custom-file-label" for="inputGambar">Pilih Gambar</label>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Judul Buku</label>
          <input type="text" class="form-control form-control @error('judul_buku') is-invalid @enderror" id="" placeholder="masukan judul buku" name="judul_buku">
          @error('judul_buku')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">pengarang</label>
          <input type="text" class="form-control form-control @error('pengarang') is-invalid @enderror" id="" placeholder="pengarang" name="pengarang">
          @error('pengarang')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Penerbit</label>
          <input type="text" class="form-control form-control @error('penerbit') is-invalid @enderror" id="" placeholder="Penerbit" name="penerbit">
          @error('penerbit')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Sinopsis</label>
          <textarea class="form-control" id="" rows="3" name="sinopsis"></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <textarea class="form-control form-control @error('deskripsi') is-invalid @enderror" id="" rows="3" name="deskripsi"> {{ old('deskripsi') }} </textarea>
          @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label>Kategori</label>
					<?php $value=old('kategori'); ?>
					<select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
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

        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah buku Total</label>
          <input type="number" class="form-control form-control @error('jumlah_buku_total') is-invalid @enderror" id="" placeholder="jumlah buku total" name="jumlah_buku_total">
          @error('jumlah_buku_total')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah buku</label>
          <input type="number" class="form-control form-control @error('jumlah_buku') is-invalid @enderror" id="" placeholder="jumlah buku" name="jumlah_buku">
          @error('jumlah_buku')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">jumlah buku diluar</label>
          <input type="number" class="form-control form-control @error('jumlah_buku_diluar') is-invalid @enderror" id="" placeholder="jumlah buku diluar" name="jumlah_buku_diluar" value="0">
          @error('jumlah_buku_diluar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label>Ruangan</label>
					<?php $value=old('ruangan'); ?>
					<select name="ruangan" class="form-control @error('ruangan') is-invalid @enderror">
							@foreach(App\Ruangan::orderBy('kode_ruangan','asc')->get() as $ruangan)
								<option value="{{$ruangan->id_ruangan}}" {{ $value == $ruangan->id_ruangan ? 'selected' : ''}}>
										{{$ruangan->kode_ruangan}}
								</option>
							@endforeach
						</select>
          @error('ruangan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Status</label>
          <select name="status" class="form-control form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect2">
            <option values="Tersedia">Tersedia</option>
            <option values="Habis">Habis</option>
          </select>
          @error('status')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('buku.index')}}" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

<script>
    $('#inputGambar').on('change',function(){
    //get the file name
      var fileName = $(this).val();
    //replace the "Choose a file" label
    $(this).next('.custom-file-label').html(fileName);
  })
</script>

@endsection
      
