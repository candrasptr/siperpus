@extends('admin.master')


@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Edit Transaksi</h3>
    </div>
    <div class="col-md-12 ">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">nama peminjam</label>
          <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="nama peminjam">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">kelas peminjam</label>
           <select id="inputState" class="form-control">
                 <option selected>Choose...</option>
                 <option>VII</option>
                 <option>VIII</option>
                 <option>IX</option>
               </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">alamat peminjam</label>
          <input type="text" class="form-control" id="e" placeholder="alamat peminjam">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">nohp peminjam</label>
          <input type="number" class="form-control" id="example" placeholder="nohp peminjam">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">judul buku</label>
          <input type="text" class="form-control" id="" placeholder="judul buku">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">jumlah pinjam</label>
          <input type="number" class="form-control" id="" placeholder="jumlah pinjam">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">waktu peminjaman</label>
          <input type="date" class="form-control" id="" placeholder="waktu peminjaman">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">waktu kembali</label>
          <input type="date" class="form-control" id="" placeholder="waktu kembali">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">status</label>
          <input type="text" class="form-control" id="" placeholder="status">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    
  </div>
</div>

@endsection
      
