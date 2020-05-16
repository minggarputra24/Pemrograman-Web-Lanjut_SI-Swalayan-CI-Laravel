<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Penjualan
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                        <div class="form-group">
                            <label for="kdkasir">Nama Kasir</label>
                            <select name="kdkasir" class="form-control" id="kdkasir">
                                <option selected>Pilih Kasir</option>
                                <?php foreach ($kasir as $ks) : ?>
                                    <option value="<?= $ks['kdkasir'] ?>"><?= $ks['namakasir'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama">Nama Barang</label>
                            <select class="form-control" name="kdbarang" id="kdbarang">
                                <option selected="selected">Pilih Nama Barang</option>
                                <?php foreach ($barang as $brg) : ?>
                                    <option value="<?= $brg['kdbarang'] ?>"><?= $brg['namabarang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="jumlahbeli">Jumlah Beli</label>
                            <input type="number" class="form-control" id="jumlahbeli" name="jumlahbeli">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>