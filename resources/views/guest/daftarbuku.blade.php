@extends('guest.master')

@section('konten')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-11 offset-md-1 mt-5">
			<h3 id="sb">Daftar Buku</h3>
		</div>
		<div class="col-md-2 offset-md-1">
				<li id="re" class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Kategori
				    </a>
				    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				      <a id="re" class="dropdown-item" href="#">Kategori 1</a>
				      <a id="re" class="dropdown-item" href="#">Kategori 1</a>
				      <a id="re" class="dropdown-item" href="#">Kategori 1</a>
				  </div>
				</li>
		</div>
		<div class="col-md-2 offset-md-3">
			<div class="input-group mb-3">
			  <input id="caribuku" type="text" class="form-control" placeholder="Cari..." aria-label="Cari" aria-describedby="button-addon2">
			  <div class="input-group-append">
			    <button id="btncaribuku" class="btn btn-outline-secondary" type="button" id="button-addon2"><i id="icaribuku" class="fas fa-search"></i></button>
			  </div>
			</div>
		</div>
		<div class="col-md-7 offset-md-1">
			<table class="table table-bordered table-hover">
			  <thead class="bg-info text-light">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama buku</th>
			      <th scope="col">ID buku</th>
			      <th scope="col">Aksi</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Matematika Kelas VII</td>
			      <td>MTK7</td>
			      <td><a href="/pinjambuku" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Matematika Kelas VIII</td>
			      <td>MTK8</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Matematika Kelas IX</td>
			      <td>MTK9</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">4</th>
			      <td>Matematika Kelas VII</td>
			      <td>MTK7</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">5</th>
			      <td>Matematika Kelas VIII</td>
			      <td>MTK8</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">6</th>
			      <td>Matematika Kelas IX</td>
			      <td>MTK9</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">7</th>
			      <td>Matematika Kelas VII</td>
			      <td>MTK7</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">8</th>
			      <td>Matematika Kelas VIII</td>
			      <td>MTK8</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">9</th>
			      <td>Matematika Kelas IX</td>
			      <td>MTK9</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			    <tr>
			      <th scope="row">10</th>
			      <td>Matematika Kelas IX</td>
			      <td>MTK9</td>
			      <td><a href="" class="btn btn-success btn-sm">Pinjam</a></td>
			    </tr>
			  </tbody>
			</table>			
		</div>
		<div class="col-md-3 ml-2">
			<div class="header">
				<span id="bo">Buku Favorit<hr class="hrprofil"></span>
			</div>
			<div class="row mt-3">
				<div class="col-sm-3">
					<img style="width: 80px;" src="{{ url('images/mantappu.jpg') }}">
				</div>
				<div class="col-sd-3 ml-3">
					<p id="me" style="font-size: 13px;" class="text-right">Matematika VII</p>
					<p class="text-secondary" style="font-size: 13px;">Teratas no 1</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-3">
					<img style="width: 80px;" src="{{ url('images/mantappu.jpg') }}">
				</div>
				<div class="col-sd-3 ml-3">
					<p id="me" style="font-size: 13px;" class="text-right">Matematika VII</p>
					<p class="text-secondary" style="font-size: 13px;">Teratas no 2</p>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-3">
					<img style="width: 80px;" src="{{ url('images/mantappu.jpg') }}">
				</div>
				<div class="col-sd-3 ml-3">
					<p id="me" style="font-size: 13px;" class="text-right">Matematika VII</p>
					<p class="text-secondary" style="font-size: 13px;">Teratas no 3</p>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection