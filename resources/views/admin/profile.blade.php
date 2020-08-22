@extends('admin.master')

@section('konten')

<div class="container mb-5">
  <div class="row mt-5">
    <div class="col-md-3 offset-md-1">
      <img src="{{ url('images/nonimage.png') }}" style="border-radius: 50%;" width="200px" class="img-circle">
      <h5 class="mt-3" id="sb">Candra Saputra</h5>
      <span class="text-secondary" id="re">candrasptr </span><br><hr>
      <i class="fa fa-envelope text-secondary"></i><span id="re" class="text-secondary"> csaputra2412@gmail.com</span><br>
      <i class="fa fa-clock text-secondary"></i><span id="re" class="text-secondary"> Joined 300 years ago</span>
    </div>
    <div class="col-md-7 mt-2">
      <div class="card rounded shadow-sm">
        <h4 class="card-header">Edit Profile</h4>
        <div class="card-body">
            <form method="post" action="">

              <!-- Form nama -->
              <div class="form-group row">
                <label for="nama" class="col-md-3 col-form-label col-form-label-md">Nama lengkap</label>
                <div class="col-md-9">
                  <input type="text" name="nama" class="form-control form-control-md" value="Candra Saputra" id="colFormLabelSm">
                </div>
              </div>

              <!-- Form username -->
              <div class="form-group row">
                <label for="username" class="col-md-3 col-form-label col-form-label-md">Username</label>
                <div class="col-md-9">
                  <input type="text" name="username" class="form-control form-control-md" id="colFormLabelSm" value="candrasptr">
                </div>
              </div>

              <!-- Form alamat email -->
              <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label col-form-label-md">Email Lengkap</label>
                <div class="col-md-9">
                  <input type="text" name="kelas" class="form-control form-control-md" id="colFormLabelSm" value="csaputra2412@gmail.com">
                </div>
              </div>

              <!-- Form Poto -->
              <div class="form-group row">
                <label for="email" class="col-md-3 col-form-label col-form-label-md">Foto Profile</label>
                <div class="col-md-9">
                  <input type="file" name="kelas" class="form-control form-control-md" id="colFormLabelSm" value="csaputra2412@gmail.com">
                </div>
              </div>
              <button type="submit" class="btn btn-info float-right"><i class="fa fa-edit"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>              

@endsection