<x-app-layout>
        <div class="card col-lg-11 mx-auto shadow">
            <div class="card-body row">
                <h3>Kinerja Anda Bulan ini</h3>
                <div class="col-lg-7 col-12">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-lg-5 col-12">
                    <h6>Keterangan Gaji</h6>
                    <p class="lead">Sallary Anda</p>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>Hari Kerja</th>
                            <td>:</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <th>Gaji Jabatan</th>
                            <td>:</td>
                            <td>Rp. 8.000.000</td>
                        </tr>
                        <tr>
                            <th>Keterlambatan</th>
                            <td>:</td>
                            <td>3 Hari</td>
                        </tr>
                        <tr>
                            <th>Potongan <br> Rp. 10.000/Hari</th>
                            <td>:</td>
                            <td>Rp. 30.000</td>
                        </tr>
                        <tr>
                            <th>Total Gaji</th>
                            <td>:</td>
                            <td>Rp. 7.970.000</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
{{-- ============================================================================= --}}
    @push('scriptku')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/3.0.1/chartjs-plugin-annotation.min.js"></script>
    
    <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['1', '2', '3', '4', '5', '6'],
            datasets: [{
              label: 'Performa Anda',
              data: [7.50, 8, 7.30, 8, 8.25, 8.30],
              borderWidth: 1,
              backgroundColor:  ['#FFB1C1'],
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: false
              }
            },
            plugins: {
    annotation: {
      annotations: {
        line1: {
          type: 'line',
          yMin: 8,
          yMax: 8,
          borderColor: 'red',
          borderWidth: 2,
          label : {
            backgroundColor: 'red',
            content: 'Jam Masuk 08:00',
            display: true
          }
        }
      }
    }
  }
          }
        });
      </script>
    @endpush
</x-app-layout>