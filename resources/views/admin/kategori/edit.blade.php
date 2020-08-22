@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Edit Kategori</h3>
    </div>
    <div class="col-md-12 ">
      <form action="{{ route('kategori.update',['kategori'=>$row->id_kategori]) }}" method="POST" >
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Nama kategori</label>
          <input value="{{ old('nama_kategori',$row->nama_kategori) }}" name="nama_kategori" type="text" class="form-control @error('kode_kategori') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Kategori">
          @error('nama_kategori')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="" rows="3" placeholder="Masukan deskripsi kategori">{{ old('deskripsi',$row->deskripsi) }}</textarea>
          @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/kategori" class="btn btn-danger">Cancel</a>
      </form>
    </div>
    
  </div>
</div>

@endsection
      
