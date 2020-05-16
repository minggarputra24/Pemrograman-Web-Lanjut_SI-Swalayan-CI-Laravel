<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Member
                </div>
                <div class="card-body">
                    
                        <!-- <div class="alert alert-danger" role="alert">
                            
                        </div> -->
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama_user">Nama User</label>
                            <input type="text" class="form-control" id="namauser" name="namauser" value="<?= $user['namauser'];?>">
                        </div>
                        <!-- <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                <option selected>-----Pilih Jenis Kelamin-----</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div> -->
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" require>
                                <option selected>-----Pilih Status-----</option>
                                <option value="pasif">Pasif</option>
                                <option value="aktif">Aktif</option>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right"> Edit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>