<?php
  echo $this->extend('layouts/templates');
  echo $this->section('content');
?>
<div class="Home-container">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hoverable Table</h4>
        <p class="card-description">Add class <code>.table-hover</code></p>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Obat</th>
                <th>Obat Masuk</th>
                <th>Obat Keluar</th>
                <th>Obat Kadaluarsa</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>####</td>
                <td class="text-success"> 28.76% <i class="mdi mdi-arrow-up"></i></td>
                <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="row">
          <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart"></canvas>
              </div>
            </div>
          </div>
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Bar chart</h4>
                <canvas id="barChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  echo $this->endSection();
?>