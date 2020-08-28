@extends('admin.master')

@section('konten')


      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Transaksi</h1>

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
                <h6 class="m-0 font-weight-bold text-primary">Data transaksi</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <div class="container-fluid">
                  <div class="row">
                  <div class="col-md-6">
                  </div>
                  
                  <div class="col-md-4 offset-md-2">
                    <form action="?" method="GET">
                      <div class="input-group mb-3">
                        <input name="keyword" id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="">
                        <div class="input-group-append">
                          <button id="btncaribuku" class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                  
                  <div class="col-md-12 mt-3">
                  <table class="table">
                      <thead>
                          <th>transaksi</th><th></th>
                      </thead>
                      <tbody>
                      @foreach($data as $row)
                        <tr>
                          <td>
                            <a href="{{ route('transaksi.show',['transaksi'=>$row->id_transaksi]) }}" class="font-weight-normal">
                                {{$row->judul_buku}}
                            </a><br>
                            <span>Nama peminjam     : <b>{{$row->nama_peminjam}}</b></span><br>
                            <span>Jumlah pinjam     : <b>{{$row->jumlah_pinjam}}</b></span><br>
                            <span>Status            : <b>{{$row->status}}</b></span><br>
                          </td>
                          <td>
                            <a href="/edittransaksi" class="btn btn-sm btn-warning">
                              <i class="fas fa-edit"></i>
                            </a><br>
                            <button class="btn btn-sm btn-danger tombol-hapus mt-2" type="button" data-url="">
                              <i class="fas fa-trash alt"></i>
                            </button>
                          </td>
                        </tr>
                        @endforeach
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



