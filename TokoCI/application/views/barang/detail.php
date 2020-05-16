<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Barang
                </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $barang['namabarang']; ?></h5>
                        <p class="card=text">
                            <label for=""><b>Email:</b></label>
                            <?= $barang['hargabarang']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Nim:</b></label>
                            <?= $barang['stok']; ?>
                        </p>
                        <!-- <p class="card=text">
                            <label for=""><b>Jurusan:</b></label>
                            <?= $barang['jurusan']; ?>
                        </p> -->
                        <a href="<?= base_url(); ?>barang" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>