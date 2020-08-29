@extends('admin.master')


@section('konten')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3 class="mb-3">Edit Buku Tamu</h3>
    </div>
    <div class="col-md-12 ">
      <form form action="{{ route('bukutamu.update',['bukutamu'=>$row->id_tamu]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <!-- Nis/Nip -->
        <div class="form-group">
          <label for="exampleInputEmail1">Nis/Nip</label>
          <input value="{{ old('nisnnip',$row->nisnnip) }}" name="nisnnip" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nisn atau Nip">
        </div>

        <!-- Nama -->
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input value="{{ old('nama_tamu',$row->nama_tamu) }}" name="nama_tamu" type="text" class="form-control @error('nama_tamu') is-invalid @enderror" id="" aria-describedby="emailHelp" placeholder="Nama">
          @error('nama_tamu')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        
        <!-- Kelas -->
        <div class="form-group">
          <label for="exampleInputEmail1">Kelas</label>
          <input value="{{ old('kelas_tamu',$row->kelas_tamu) }}" name="kelas_tamu" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Kelas">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Tanggal Pinjam</label>
          <input value="{{ old('tanggal_kunjungan',$row->tanggal_kunjungan) }}" name="tanggal_kunjungan" value="" type="date" class="col-md-2 form-control @error('nama_tamu') is-invalid @enderror" id="date1" placeholder="Masukan Tanggal Kunjungan">
          @error('tanggal_kunjungan')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection
      
