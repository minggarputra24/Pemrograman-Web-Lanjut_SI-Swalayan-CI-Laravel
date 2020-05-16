<div class="container">

<div class="row mt-2">
    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
      Data Penonton<strong> Berhasil </strong> Ditambahkan ! <?= $this->session->flashdata('flash-data');?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> -->
  </div>

    <!-- <div class="input-group mt-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="input-group">
  <input type="text" class="form-control" placeholder="Cari Data Penonton" name="keyword">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Cari</button>
  </div>
  </div>  
  </form>
  </div>
</div> -->

    <div class="row mt-3">
        <div class="col-md-10">
            <h2>Daftar User</h2>
            
            <table class="table" id="tables">
                <thead>
                    <tr>
                    <th scope="col">Nama User</th>
                    <!-- <th scope="col">Jenis Kelamin</th> -->
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Level</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($user as $usr):?>
                    <tr>
                    <td><?= $usr ['namauser'];?></td>
                    <td><?= $usr ['username'];?></td>
                    <td><?= $usr ['password'];?></td>
                    <td><?= $usr ['level'];?></td>
                    <td><?= $usr ['status'];?></td>
                    <td>
                    <div class="input-group-append">
              <form action="<?=base_url('dataUser/hapus/').$usr['id']?>" method="post">
                  <button class="btn btn-danger btn-sm mr-2">
                    Hapus Data
                  </button>
                </input>
              </form>
              <form action="<?=base_url('dataUser/edit/').$usr['id']?>" method="post">
                  <button class="btn btn-sm btn-primary ">
                    Edit Data
                  </button>
              </form>
              </div>
            </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>