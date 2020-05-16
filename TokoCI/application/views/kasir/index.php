<div class="container">
    <table class="table table-hover">
        <?php if ($this->session->flashdata('flash-data')) : ?>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Kasir<strong> berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>kasir/tambah" class="btn btn-primary">Tambah Data Kasir</a>
                <br><br>
            </div>
            <thead>
                <th scope="row" class="text-center bg-warning">Kode Kasir</th>
                <th scope="row" class="text-center bg-warning">Nama Kasir</th>
                <th scope="row" class="text-center bg-warning">Alamat</th>
                <th scope="row" class="text-center bg-warning">No Telepon</th>
                <th scope="row" class="text-center bg-warning">Aksi</th>
            </thead>
            <tbody>
                <?php foreach ($kasir as $ks) : ?>
                    <tr>
                        <td scope="col" class="text-center"><?= $ks['kdkasir']; ?></td>
                        <td scope="col" class="text-center"><?= $ks['namakasir']; ?></td>
                        <td scope="col" class="text-center"><?= $ks['alamat']; ?></td>
                        <td scope="col" class="text-center"><?= $ks['telepon']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>kasir/hapus/<?= $ks['kdkasir']; ?>" class="btn btn-danger btn-sm float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            <a href="<?= base_url(); ?>kasir/edit/<?= $ks['kdkasir']; ?>" class="btn btn-success btn-sm float-right">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>
</div>
</div>
</div>