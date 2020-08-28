@extends('guest.master')

@section('konten')

<div class="container-fluid mt-5">
  <div class="row mt-1">
  <div class="col-md-10 offset-md-1 mt-5">
    <div class="col-md-12">
      <div class="card rounded shadow">
        <h4 class="card-header">Buku Tamu</h4>
        <div class="card-body">
            <form method="" action="/home">

              <div class="row mt-3">
                <div class="col-md-6">
                  <br><br>
                  <h3 class="text-center">WELCOME</h3>
                </div>
                <div class="col-md-6">
                  <!-- Nis -->
                  <div class="form-group row">
                    <label for="Nis" class="col-md-2 col-form-label col-form-label-md">Nis/Nip</label>
                    <div class="col-md-9">
                      <input type="text" name="Nis" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nama" required>
                    </div>
                  </div>

                  <!-- Nama -->
                  <div class="form-group row">
                    <label for="nama" class="col-md-2 col-form-label col-form-label-md">Nama</label>
                    <div class="col-md-9">
                      <input type="text" name="nama" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan nama" required>
                    </div>
                  </div>

                  <!-- Kelas -->
                  <div class="form-group row">
                    <label for="kelas" class="col-md-2 col-form-label col-form-label-md">Kelas</label>
                    <div class="col-md-9">
                      <input type="text" name="kelas" class="form-control form-control-md" id="colFormLabelSm" placeholder="Masukan kelas" required>
                    </div>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-info mt-3 px-4 float-right">Submit</button>
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