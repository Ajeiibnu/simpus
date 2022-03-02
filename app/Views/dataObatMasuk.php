<?php
  echo $this->extend('layouts/templates');
  echo $this->section('content');
?>

<div class="dataObat-container">
  <div class="col-md-6">
    <div class="card-body">
      <h4 class="card-title">Single color buttons</h4>
      <button type="button" class="btn btn-success" name="tambah" type="button">Tambah Obat Baru</button>
      <button type="button" class="btn btn-success" name="tambah" type="button">Penerimaan Obat</button>
      <button type="button" class="btn btn-success" name="tambah" type="button">Hapus</button>
      <button type="button" class="btn btn-success" name="tambah" type="button">Edit</button>
    </div>
  </div>
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Striped Table</h4>
        <p class="card-description">
          Add class <code>.table-striped</code>
        </p>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>*</th>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Kelas Terapi</th>
                <th>Satuan</th>
                <th>Stok</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>1</td>
                <td>###</td>
                <td>###</td>
                <td>###</td>
                <td>###</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr><tr>
                <td>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input">
                    </label>
                  </div>
                </td>
                <td>2</td>
                <td>###</td>
                <td>###</td>
                <td>###</td>
                <td>###</td>
                <td>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  echo $this->endSection();
?>