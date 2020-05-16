<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Penjualan
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                    <div class="form-group">
                            <label for="namakasir">Nama Kasir</label>
                            <select class="form-control" id="kdkasir" name="kdkasir">
                                <?php foreach ($kasir as $ks) : ?>
                                    <?php if ($ks['kdkasir'] == $penjualan['kdkasir']) : ?>
                                        <option value="<?= $penjualan['kdkasir'] ?>" selected><?= $ks['namakasir'] ?>
                                        <?php else : ?>
                                        <option value="<?= $ks['kdkasir'] ?>"><?= $ks['namakasir'] ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <select class="form-control" id="kdbarang" name="kdbarang">
                                <?php foreach ($barang as $brg) : ?>
                                    <?php if ($brg['kdbarang'] == $penjualan['kdbarang']) : ?>
                                        <option value="<?= $penjualan['kdbarang'] ?>" selected><?= $brg['namabarang'] ?>
                                        <?php else : ?>
                                        <option value="<?= $brg['kdbarang'] ?>"><?= $brg['namabarang'] ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <input type="hidden" name="kdpenjualan" value="<?= $penjualan['kdpenjualan']; ?>">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $penjualan['tanggal']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jumlahbeli">Jumlah Beli</label>
                            <input type="number" class="form-control" id="jumlahbeli" name="jumlahbeli" value="<?= $penjualan['jumlahbeli']; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>