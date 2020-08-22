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

              <div class="form-group row">
                <label for="jumlah" class="col-md-2 col-form-label col-form-label-md">Jumlah</label>
                <div class="col-md-3 col-md-offset-7">
                  <input type="number" name="jumlah" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan Jumlah" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nama" class="col-md-2 col-form-label col-form-label-md">Nama</label>
                <div class="col-md-10">
                  <input type="text" name="nama" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nama" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="phone" class="col-md-2 col-form-label col-form-label-md">No wa/hp</label>
                <div class="col-md-10">
                  <input type="text" name="phone" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nomor hp" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="kelas" class="col-md-2 col-form-label col-form-label-md">Kelas</label>
                <div class="col-md-10">
                  <input type="text" name="kelas" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan kelas" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="durasi" class="col-md-2 col-form-label col-form-label-md">Durasi pinjam</label>
                <div class="col-md-10">
                  <select class="custom-select" id="durasi">
                    <option selected>Chosee</option>
                    <option value="1">1 Hari</option>
                    <option value="2">2 Hari</option>
                    <option value="3">3 Hari</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-md-2 col-form-label col-form-label-md">Alamat Lengkap</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="alamat" rows="3" placeholder="" required>
                  </textarea>
                  <h15>Alamat harus lengkap, beserta dengan kode pos,<br>
                     Contoh : Dusun babakanjaya, Rt 54/69, Desa kedungwuluh, kecamatan
                     Padaherang, Kabupaten Pangandaran, Provinsi Jabar Kode pos 46384</h15>
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