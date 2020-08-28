@extends('admin.master')

@section('konten')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>
          <!-- Content Row -->

          <div class="row">

              <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengunjung (Bulan Ini)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datakunjungperbulan}}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
              <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah buku yang dipinjam (Bulan Ini)</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$datapinjamperbulan}}</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
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
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
          </div>       

      </div>
      <!-- End of Main Content -->

  <script type="text/javascript">
   let datakunjungperbulanchrt =  JSON.parse(`<?php echo $datakunjungperbulanchrt ?>`);
   let datapinjamperbulanchrt =  JSON.parse(`<?php echo $datapinjamperbulanchrt ?>`);
    Highcharts.chart('myChart', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Jumlah pengunjung dan Jumlah buku dipinjam Bulanan'
        },
        subtitle: {
            text: ''
        },

        colors: ['#4E73DF','#F6C23E'],

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
            data: datakunjungperbulanchrt
        },{
            name: 'Jumlah Buku Dipinjam',
            data: datapinjamperbulanchrt
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

  
