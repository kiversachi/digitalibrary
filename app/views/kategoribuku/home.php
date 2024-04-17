<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-yellow">
                <a href="<?= urlTo('/kategoribuku/create'); ?>" class="btn btn-success float-left">
                  Tambah Kategori
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body bg-yellow">
                <table id="example1" class="table bg-secondary  table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $k['NamaKategori']; ?></td>
                      <td>
                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/edit') ?>"
                        class="btn btn-light
                        ">
                          Edit
                        </a>

                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/delete') ?>"
                        class="btn btn-danger
                        ">
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Tindakan</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>