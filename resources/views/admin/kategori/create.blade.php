@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Create Kategori</h3>
    </div>
    <div class="col-md-12 ">
      <form action="{{route('kategori.store')}}" method="POST">

      @csrf

        <div class="form-group">
          <label for="exampleInputEmail1">Nama kategori</label>
          <input name="nama_kategori" type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="" aria-describedby="emailHelp" placeholder="nama kategori">
          @error('nama_kategori')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="" rows="3"></textarea>
          @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('kategori.index')}}" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection
      
