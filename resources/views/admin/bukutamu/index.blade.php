@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Buku Tamu</h1>

  @if (session('store'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Success!</strong> {{ session('destroy') }}.
          </div>  
          @endif

          @if (session('update'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Success!</strong> {{ session('destroy') }}.
          </div>  
          @endif

          @if(session('destroy'))
          <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                  <span>&times;</span>
              </button>
              <strong>Succes!</strong>{{ session('destroy')}}.
          </div>
          @endif
          

  <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Tamu</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
              <a href="{{route('bukutamu.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Tamu</a>
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
                  <th>Nisn/Nip</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $row)
                <tr>
                  <td>{{$row->nisnnip}}</td>
                  <td>{{$row->nama_tamu}}</td>
                  <td>{{$row->kelas_tamu}}</td>
                </tr>
                @endforeach
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


