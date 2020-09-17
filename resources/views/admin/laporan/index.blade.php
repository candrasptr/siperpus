

@extends('admin.master')

@section('konten')

<!-- Begin Page Content -->
<div class="container-fluid">
  
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
  </div>
    
  <div class="row">
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-dark shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-muted text-uppercase mb-1">Jumlah Buku Total</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah_buku_total}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengunjung (Monthly)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_kunjung_perbulan}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Total Transaksi (Monthly)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_transaksi_perbulan}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah buku yang selesai dipinjam (Monthly)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_pinjam_selesai_perbulan}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah buku yang di pinjam (DYNAMIC)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_pinjam_dipinjam_perbulan}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4 ">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah buku kadaluarsa (DYNAMIC)</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_pinjam_kadaluarsa_perbulan}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Diagram</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="chart-area">
              <div id="myChart"></div>
              </div>
              <br><br><br><br><br>
            </div>
          </div>
        </div>
  </div>
</div>
<!-- /.container-fluid -->

<script type="text/javascript">
   let jumlah_buku_total =  JSON.parse(`<?php echo $jumlah_buku_total ?>`);
   let data_kunjung_perbulan_chrt =  JSON.parse(`<?php echo $data_kunjung_perbulan_chrt ?>`);
   let data_transaksi_perbulan_chrt =  JSON.parse(`<?php echo $data_transaksi_perbulan_chrt ?>`);
   let data_pinjam_selesai_perbulan_chrt =  JSON.parse(`<?php echo $data_pinjam_selesai_perbulan_chrt ?>`);
   let data_pinjam_dipinjam_perbulan_chrt =  JSON.parse(`<?php echo $data_pinjam_dipinjam_perbulan_chrt ?>`);
   let data_pinjam_kadaluarsa_perbulan_chrt =  JSON.parse(`<?php echo $data_pinjam_kadaluarsa_perbulan_chrt ?>`);
    Highcharts.chart('myChart', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Jumlah pengunjung dan Jumlah Transaksi Bulanan'
        },
        subtitle: {
            text: 'Jumlah Buku Milik Perpustakaan Total : ' + jumlah_buku_total
        },

        colors: ['#4E73DF','#36B9CC','#1CC88A','#F6C23E','#E74A3B'],

         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Jumlah Pengunjung',
            data: data_kunjung_perbulan_chrt
        },{
            name: 'Jumlah Total Transaksi',
            data: data_transaksi_perbulan_chrt
        },{
            name: 'Jumlah Total Peminjaman Selesai',
            data: data_pinjam_selesai_perbulan_chrt
        },{
            name: 'Jumlah Total Peminjaman Dipinjam',
            data: data_pinjam_dipinjam_perbulan_chrt
        },{
            name: 'Jumlah Total Peminjaman Kadaluarsa',
            data: data_pinjam_kadaluarsa_perbulan_chrt
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
  
@endsection



