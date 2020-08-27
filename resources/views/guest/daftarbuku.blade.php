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
				<?php $kategori = App\Kategori::orderBy('nama_kategori','asc')->get(); ?>
				@foreach($kategori as $kategori)
				    <a id="re" class="dropdown-item" href="{{ route('kategoribuku',['kategori'=>$kategori->id_kategori]) }}">{{$kategori->nama_kategori}}</a>
				@endforeach
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
			<table class="table">
			    <thead>
			        <th>Buku</th>
			    </thead>
			    @foreach($data as $row)
			    <tbody>
				@foreach($data as $row)
			      <tr>
			        <td>
<<<<<<< HEAD
			          <img src="{{url('images/'.$row->file_gambar_buku)}}" width="100" class="img-thumbnail mr-3" align="left">
			          <a href="/showbukuguest" class="font-weight-normal">
			              {{$row->judul_buku}}
			          </a><br>
					  <?php $nama_kategori = App\Kategori::select('nama_kategori')->where('id_kategori','=',$row->id_kategori)->pluck('nama_kategori')->first(); ?>
					  <?php $kode_ruangan = App\Ruangan::select('kode_ruangan')->where('id_ruangan','=',$row->id_ruangan)->pluck('kode_ruangan')->first(); ?>
			          <span>Penerbit   : <b>{{$row->penerbit}}</b></span><br>
			          <span>Kategori   : <b>{{$nama_kategori}}</b></span><br>
			          <span>Ruangan    : <b>{{$kode_ruangan}}</b></span><br>
=======
			          <img src="{{url('images/'.$row->filegambarbuku)}}" width="100" class="img-thumbnail mr-3" align="left">
			          <a href="/showbukuguest" class="font-weight-normal">
			              {{$row->judul_buku}}
			          </a><br>
			          <span>{{$row->penerbit}}  :  <b>Lorem</b></span><br>
			          <span>{{$row->judul_buku}}  : <b>Ipsum</b></span><br>
			          <span>{{$row->judul_buku}}  : <b>Blok A1</b></span><br>
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410
			        </td>
			        <td>
			          <a href="/showbukuguest" class="btn btn-sm btn-info">
			            Selengkapnya
			          </a>
			          <a href="/pinjambuku" class="btn btn-sm btn-success ml-3">
			            Pinjam
			          </a>
			        </td>
			      </tr>
<<<<<<< HEAD
				  @endforeach
				 </tbody> 
=======
			      @endforeach
			    </tbody>
>>>>>>> 7d3ee3124e14eb1dc4133dc52041e481fcc24410
			</table>
			{!! $data->links() !!}			
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