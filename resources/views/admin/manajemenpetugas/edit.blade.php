@extends('admin.master')


@section('konten')
<div class="container-fluid mb-5">
  <div class="row">
    <div class="col-md-12">
      <h3>Edit petugas</h3>
    </div>
    <div class="col-md-12 ">
    
    <form method="POST" action="{{ route('admin.update',['admin'=>$row->id_admin]) }}">
			
			@csrf
			@method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Nama admin</label>
          <input name="nama_admin" value="{{ old('nama_admin',$row->nama_admin) }}"type="text" class="form-control @error('nama_admin') is-invalid @enderror" id="" placeholder="masukan nama admin">
          @error('nama_admin')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input name="email" value="{{ old('email',$row->email) }}" type="email" class="form-control @error('email') is-invalid @enderror" id="" placeholder=" masukan email">
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
        <a href="/petugas" class="btn btn-danger">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection
      
