<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data Barang</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="kdbarang" value="<?= $barang['kdbarang'];?>">
                        <div class="form-group">
                            <label for="namabarang">Nama Barang</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?= $barang['namabarang']; ?>">
                            <?= form_error('namabarang'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">Harga Barang</label>
                            <input type="number" class="form-control" id="hargabarang" name="hargabarang" value="<?= $barang['hargabarang']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="<?= $barang['stok']; ?>">
                        </div>

                        <!-- <!-- <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan" class="form-group">
                            <?php foreach($jurusan as $key): ?>
                                <?php if($key == $mahasiswa['jurusan']):?>
                                    <option value="<?= $key ?>" selected><?= $key ?></option>
                                <?php else :?>
                                    <option value="<?= $key ?>"><?= $key ?></option>
                                <?php endif; ?>
                            <?php endforeach;?>
                                <!-- <option value="kimia">Kimia</option>
                                <option value="informatika">Informatika</option>
                                <option value="mesin">Mesin</option> -->
                            </select>
                        </div> 
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>