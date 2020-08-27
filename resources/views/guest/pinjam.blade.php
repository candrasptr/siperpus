@extends('guest.master')

@section('konten')

<div class="container-fluid">
  <div class="row mt-1">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="col-md-12">
      <div class="card rounded shadow">
        <h4 class="card-header">Peminjaman</h4>
        <div class="card-body">
        	<h5 id="sb">Matematika Kelas VII</h5>
        	<p>Buku matematika kelas VII ini adalah Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam hendrerit quis tortor non cursus. Duis a erat ultricies, pharetra augue a, vehicula tortor. Duis vitae est at mauris condimentum porttitor id nec sem. Fusce quis nisl nulla. Cras massa tellus, egestas nec vulputate vitae, dignissim vitae magna. Nam porttitor commodo tellus, in cursus nibh mattis eu. Morbi vehicula accumsan urna ac tincidunt.</p>
            <p class="text-danger">*Untuk Meminjam buku ini, silahkan isi formulir dibawah ini dengan lengkap!</p>
            <form method="post" action="">

              <!-- Nis -->
              <div class="form-group row">
                <label for="Nis" class="col-md-2 col-form-label col-form-label-md">Nis/Nip</label>
                <div class="col-md-10">
                  <input type="text" name="Nis" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nama" required>
                </div>
              </div>

              <!-- Nama -->
              <div class="form-group row">
                <label for="nama" class="col-md-2 col-form-label col-form-label-md">Nama</label>
                <div class="col-md-10">
                  <input type="text" name="nama" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nama" required>
                </div>
              </div>

              <!-- Kelas -->
              <div class="form-group row">
                <label for="kelas" class="col-md-2 col-form-label col-form-label-md">Kelas</label>
                <div class="col-md-10">
                  <input type="text" name="kelas" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan kelas" required>
                </div>
              </div>

              <button type="submit" class="btn btn-info">Submit pesan</button>
              <a href="/" class="btn btn-danger">Cancel</a> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
</div>

@endsection