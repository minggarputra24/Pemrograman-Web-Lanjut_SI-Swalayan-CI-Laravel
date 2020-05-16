<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Kasir
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <input type="hidden" name="kdkasir" value="<?= $kasir['kdkasir']; ?>">
                        <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                        <div class="form-group">
                            <label for="Nama">Nama Kasir</label>
                            <input type="text" class="form-control" id="namakasir" name="namakasir" value="<?= $kasir['namakasir']; ?>">
                            <!-- <small class="form-text text-danger"><?= form_error('namakasir'); ?></small> -->
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $kasir['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input type="text" class="form-control" id="telepom" name="telepon" value="<?= $kasir['telepon']; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>