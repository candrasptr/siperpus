@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Ruangan</h1>

  
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
          <h6 class="m-0 font-weight-bold text-primary">Data Ruangan</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
              <a href="{{route('ruangan.create')}}" class="btn btn-primary">Create</a>
            </div>

            <div class="col-md-4 offset-md-2">
              <form action="?" method="GET">
                  <div class="input-group mb-3">
                      <input name="keyword" id="cariruangan" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="{{ Request()->keyword }}">
                      <div class="input-group-append">
                        <button id="btncariruangan" class="btn btn-outline-secondary bg-primary" type="submit" id="button-addon2"><i class="fas fa-search text-light"></i></button>
                      </div>
                  </div>
              </form>
            </div>

            <div class="col-md-12 mt-3">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                  <th>Kode Ruangan</th>
                  <th>Deskripsi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $row)
                <tr>
                  <td>{{$row->kode_ruangan}}</td>
                  <td style=
                      "max-width: 800px;
                      text-overflow: ellipsis;
                      overflow: hidden;
                      white-space: nowrap;"
                    >{{$row->deskripsi}}</td>
                  <td>
                    <a href="{{ route('ruangan.edit',['ruangan'=>$row->id_ruangan]) }}" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i>
                    </a><br>
                    <button class="btn btn-sm btn-danger tombol-hapus mt-2" type="button" data-url="">
                      <i class="fas fa-trash alt"></i>
                    </button>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        {!! $data->links() !!}
      </div>
    </div>
  </div>
</div>
    
  

</div>
<!-- /.container-fluid -->
  
@endsection



