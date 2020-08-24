@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Tambah Admin</h3>
    </div>
    <div class="col-md-12 ">
      <form action="{{route('admin.store')}}" method="POST">
      @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama admin</label>
          <input name="nama_admin" type="text" class="form-control @error('nama_admin') is-invalid @enderror" id="" placeholder="masukan nama admin">
          @error('nama_admin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder=" masukan email">
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="password" type="Password" class="form-control @error('password') is-invalid @enderror" id="" placeholder="masukan Password">
          @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/Admin" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection
      
