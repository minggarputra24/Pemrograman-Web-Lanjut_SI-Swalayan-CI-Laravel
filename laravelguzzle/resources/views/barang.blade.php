 @extends('master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                 <thead>
                    <tr>
                      
                      <th>Kode Barang</th>
                      <th>Nama Barang</th>
                      <th>Harga Barang</th>
                      <th>Stok Barang</th>
                      <!-- <th>Tambah Barang</th>
                      <th>Edit Barang</th>
                      <th>Hapus Barang</th> -->
                    </tr>
                  </thead>
                  
                  <tbody>
                     <?php 
            foreach ($barang as $brg):
            ?>                    
                        <tr>

                        <td><?= $brg['kdbarang'];?></td>
                        <td><?= $brg['namabarang'];?></td>
                        <td><?= $brg['hargabarang'];?></td>
                        <td><?= $brg['stok'];?></td>
                      </tr>
                      <?php endforeach ;?>
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection