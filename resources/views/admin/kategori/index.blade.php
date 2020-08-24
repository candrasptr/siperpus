@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800">Kategori</h1>

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
          <h6 class="m-0 font-weight-bold text-primary">Data kategori</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
              <a href="{{route('kategori.create')}}" class="btn btn-primary">Create</a>
            </div>

            <div class="col-md-4 ">
              <form action="?" method="GET">
                  <div class="input-group mb-3">
                      <input name="keyword" id="carikategori" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2" value="{{ Request()->keyword }}">
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
                  <th>Nama kategori</th>
                  <th>Deksripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($data as $row)
                <tr>
                  <td>{{$row->nama_kategori}}</td>
                  <td style=
                      "max-width: 800px;
                      text-overflow: ellipsis;
                      overflow: hidden;
                      white-space: nowrap;"
                    >{{$row->deskripsi}}</td>
                    <td>
                    <a href="{{ route('kategori.edit',['kategori'=>$row->id_kategori]) }}" class="btn btn-sm btn-warning">
                      <i class="fas fa-edit"></i>
                    </a><br>
                    <button class="btn btn-sm btn-danger tombol-hapus mt-2" type="button" data-url="{{ route('kategori.destroy',['kategori'=>$row->id_kategori])}}">
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

@push('modal')
<div class="modal fade" tabindex="-1" id="modalHapus">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="fas fa-trash-alt"></i>Hapus
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah yakin akan dihaspus?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <form action="#" method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Ya,Hapus!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endpush

@push('js')
<script>
    $(function(){
        $('.tombol-hapus').click(function(){
            var url = $(this).attr('data-url');
            $("#modalHapus form").attr('action',url);
            $('#modalHapus').modal('show');
        });
    });
</script>
@endpush      


