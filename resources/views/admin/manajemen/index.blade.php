@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Petugas</h1>
  <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Transaksi</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
              <a href="/createtransaksi" class="btn btn-primary">Create</a>
            </div>
            <div class="col-md-4 offset-md-2">
              <div class="input-group mb-3">
                <input id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button id="btncaribuku" class="btn btn-outline-secondary bg-primary" type="button" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id Transaksi</th>
                  <th>Nama admin</th>
                  <th>email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>
                    <a href="" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i>
                    </a><br>
                    <button class="btn btn-sm btn-danger tombol-hapus mt-2" type="button" data-url="">
                      <i class="fas fa-trash alt"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
  

</div>
<!-- /.container-fluid -->
  
@endsection



