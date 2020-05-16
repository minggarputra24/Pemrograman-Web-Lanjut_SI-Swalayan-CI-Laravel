<div class="container">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash');?>"></div>
<?php if($this->session->flashdata('flash')):?>
<!-- <div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Barang <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div> -->
<?php endif;?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>barang/tambah " class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Barang" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Barang</h2>

        <!-- alert -->
        <?php if(empty($barang)):?>
        <div class="alert alert-danger" role="alert">
            Data Barang tidak ditemukan
        </div>
        <?php endif; ?>
    <ul class="list-group">
        <?php foreach($barang as $brg):?>
            <li class="list-group-item">
                <?= $brg['namabarang'];?>
                <a href="<?= base_url();?>barang/hapus/<?= $brg['kdbarang'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                <a href="<?= base_url();?>barang/edit/<?= $brg['kdbarang'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<?= base_url();?>barang/detail/<?= $brg['kdbarang'];?>"
                class="badge badge-primary float-right">Detail</a>
            </li>
        <?php endforeach; ?>    
    </ul>
    </div>
</div>
</div>