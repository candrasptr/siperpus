@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Kategori</h1>

          

  <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data kategori</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
              <a href="/createbukutamu" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Buku Tamu</a>
            </div>

            <div class="col-md-4 offset-md-2">
              <form action="?" method="GET">
                  <div class="input-group mb-3">
                      <input name="keyword" id="carikategori" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="">
                      <div class="input-group-append">
                        <button id="btncarikategori" class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                      </div>
                  </div>
              </form>
            </div>

            <div class="col-md-12 mt-3">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama kategori</th>
                  <th>Nis/Nip</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Lorem</td>
                  <td>123</td>
                  <td>VII</td>
                    <td>
                    <a href="/editbukutamu" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i>
                    </a>
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


