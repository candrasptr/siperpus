@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Create Ruangan</h3>
    </div>
    <div class="col-md-12 ">
      <form action="{{route('ruangan.store')}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Kode Ruangan</label>
          <input name="kode_ruangan" type="text" class="form-control @error('kode_ruangan') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contoh (A1) ">
          @error('kode_ruangan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Deskripsi</label>
          <textarea name="deskripsi_ruangan" class="form-control @error('deskripsi') is-invalid @enderror" id="" rows="3" placeholder="Isi dengan alamat ruangan atau deksripsi lainya"></textarea>
          @error('deskripsi')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/ruangan" class="btn btn-danger">Cancel</a>
      </form>
    </div>
    
  </div>
</div>

@endsection
      
