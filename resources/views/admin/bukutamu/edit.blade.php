@extends('admin.master')


@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3 class="mb-3">Edit Buku Tamu</h3>
    </div>
    <div class="col-md-12 ">
      <form>

        <!-- Nis/Nip -->
        <div class="form-group">
          <label for="exampleInputEmail1">Nis/Nip</label>
          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="nama peminjam">
        </div>

        <!-- Nama -->
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="nama peminjam">
        </div>
        
        <!-- Kelas -->
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas</label>
          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="nama peminjam">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>

@endsection
      
