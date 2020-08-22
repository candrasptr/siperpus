@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Edit Buku</h3>
    </div>
    <div class="col-md-12">
      <form action="{{ route('buku.update',['buku'=>$row->id_buku]) }}" method="POST" enctype="multipart/form-data">

        @csrf
			  @method('PUT')

        <div class="form-group">
          <div class="custom-file">
            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="inputGambar" placeholder=" masukan file gambar buku" name="gambar">
            <label class="custom-file-label" for="inputGambar" >{{ old('file_gambar_buku',$row->file_gambar_buku) }}</label>
            @error('gambar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Judul Buku</label>
          <input value="{{ old('judul_buku',$row->judul_buku) }}"  type="text" class="form-control form-control @error('judul_buku') is-invalid @enderror" id="" placeholder="masukan judul buku" name="judul_buku">
          @error('judul_buku')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">jumlah halaman</label>
          <input value="{{ old('jumlah_halaman',$row->jumlah_halaman) }}" type="number" class="form-control form-control @error('jumlah_halaman') is-invalid @enderror" id="" placeholder="jumlah halaman" name="jumlah_halaman">
          @error('jumlah_halaman')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">pengarang</label>
          <input value="{{ old('jumlah_halaman',$row->jumlah_halaman) }}" type="text" class="form-control form-control @error('pengarang') is-invalid @enderror" id="" placeholder="pengarang" name="pengarang">
          @error('pengarang')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Penerbit</label>
          <input value="{{ old('penerbit',$row->penerbit) }}" type="text" class="form-control form-control @error('penerbit') is-invalid @enderror" id="" placeholder="Penerbit" name="penerbit">
          @error('penerbit')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Sinopsis</label>
          <textarea value="" class="form-control" id="" rows="3" name="sinopsis"> {{ old('sinopsis',$row->sinopsis) }} </textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <textarea value="" class="form-control form-control @error('deskripsi') is-invalid @enderror" id="" rows="3" name="deskripsi"> {{ old('deskripsi',$row->deskripsi) }} </textarea>
          @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label>Kategori</label>
          <?php $value=old('kategori',$row->id_kategori);?>
					<select name="kategori" class="form-control @error('kategori') is-invalid @enderror">
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

        <div class="form-group">
          <label for="exampleInputPassword1">jumlah buku</label>
          <input value="{{ old('jumlah_buku',$row->jumlah_buku) }}" type="number" class="form-control form-control @error('jumlah_buku') is-invalid @enderror" id="" placeholder="jumlah buku" name="jumlah_buku">
          @error('jumlah_buku')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">jumlah buku diluar</label>
          <input value="{{ old('jumlah_buku_diluar',$row->jumlah_buku_diluar) }}" type="number" class="form-control form-control @error('jumlah_buku_diluar') is-invalid @enderror" id="" placeholder="jumlah buku diluar" name="jumlah_buku_diluar" value="0">
          @error('jumlah_buku_diluar')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <div class="form-group">
          <label>Ruangan</label>
					<?php $value=old('ruangan',$row->id_ruangan);?>
					<select name="ruangan" class="form-control @error('ruangan') is-invalid @enderror">
						<option>Pilih : </option>
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
          <select value="{{ old('status',$row->status) }}" name="status" class="form-control form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect2">
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
        <a href="/buku" class="btn btn-danger">Cancel</a>
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
      
