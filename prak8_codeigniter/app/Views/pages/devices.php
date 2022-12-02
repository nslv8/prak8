<?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">

                    <h1>Daftar Barang</h1>
                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Devices_Name</th>
      <th scope="col">Merk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="data:image/png;base64,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" class="img-thumbnail" alt="..."></td>
      <td>Arduino</td>
      <td>Genuiono</td>
      <td>19</td>
      <td>1</td>
      <td><button type="button" class="btn btn-info">Details</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="data:image/jpeg;base64,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" class="img-thumbnail" alt="..."></td>
      <td>Komputer</td>
      <td>Samsung</td>
      <td>20</td>
      <td>1</td>
      <td><button type="button" class="btn btn-info">Details</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="data:image/jpeg;base64,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" class="img-thumbnail" alt="..."></td>
      <td>Projector</td>
      <td>Canon</td>
      <td>2</td>
      <td>0</td>
      <td><button type="button" class="btn btn-info">Details</button></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
        </div>
        <?= $this->endSection(); ?>