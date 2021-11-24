<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Statistik</h2>
        <ol>
          <li><a href="./">Home</a></li>
          <li>Statistik</li>
        </ol>
      </div>

    </div>
  </section>
  <!-- End Breadcrumbs -->

  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-4 text-center" data-aos="fade-top">
          <h5>Data Penduduk</h5>
          <canvas id="myChart"></canvas>
        </div>
        <div class="col-lg-4 text-center" data-aos="fade-top">
          <h5>Data Pendidikan</h5>
          <canvas id="myChart2"></canvas>
        </div>
      </div>
      <div class="row content">
        <div class="col-lg-12 text-center" data-aos="fade-top">
          <h5 class="text-danger">(Data Tipu tipu)</h5>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

 

</main>
<!-- End #main -->

<script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Laki-laki", "Perempuan"],
      datasets: [{
        label: '',
        data: [400, 340],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });

  var ctx2 = document.getElementById("myChart2").getContext('2d');
  var myChart2 = new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: ["TKK", "SD", "SMP", "SMA", "S1", "S2", "S3"],
      datasets: [{
        label: '',
        data: [200, 140, 300, 200, 100, 10, 2],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>