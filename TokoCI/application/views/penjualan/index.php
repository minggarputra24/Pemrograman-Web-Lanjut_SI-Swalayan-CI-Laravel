<div class="container">
    <table class="table table-hover">
        <?php if ($this->session->flashdata('flash-data')) : ?>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Penjualan<strong> berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <div class="row mt-4">
            <div class="col-md-2">
                <a href="<?= base_url(); ?>penjualan/tambah" class="btn btn-primary">Tambah Data Penjualan</a>
            </div>
            <div class="col-md-4">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Data Penjualan" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-info" type="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <!--alert-->
        <div class="row">
            <div class="col-4">
                <?php if (empty($penjualan)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data Penjualan tidak ditemukan
                    </div>
                <?php endif; ?>
                <thead>
                    <th scope="row" class="text-center table-success">Nama Kasir</th>
                    <th scope="row" class="text-center table-success">Nama Barang</th>
                    <th scope="row" class="text-center table-success">Tanggal</th>
                    <th scope="row" class="text-center table-success">Harga Barang</th>
                    <th scope="row" class="text-center table-success">Jumlah Beli</th>
                    <th scope="row" class="text-center table-success">Aksi</th>
                </thead>
                <tbody>
                    <?php foreach ($penjualan as $pe) : ?>
                        <tr>
                            <td scope="col" class="text-center"><?= $pe['namakasir']; ?></td>
                            <td scope="col" class="text-center"><?= $pe['namabarang']; ?></td>
                            <td scope="col" class="text-center"><?= $pe['tanggal']; ?></td>
                            <td scope="col" class="text-center"><?= $pe['hargabarang']; ?></td>
                            <td scope="col" class="text-center"><?= $pe['jumlahbeli']; ?></td>
                            <td>
                                <a href="<?= base_url(); ?>penjualan/hapus/<?= $pe['kdpenjualan']; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                                <a href="<?= base_url(); ?>penjualan/edit/<?= $pe['kdpenjualan']; ?>" class="btn btn-success btn-sm float-right">Edit Penjualan</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
    </table>
</div>
</div>
</div>