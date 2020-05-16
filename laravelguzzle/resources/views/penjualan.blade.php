 @extends('master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penjualan</li>
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
                      
                      <th>Kode Penjualan</th>
                      <th>Kode Kasir</th>
                      <th>Kode Barang</th>
                      <th>Tanggal</th>
                      <th>Jumlah Beli</th>
                      <th>Tambah Penjualan</th>
                      <th>Edit Penjualan</th>
                      <th>Hapus Penjualan</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                     <?php 
            foreach ($penjualan as $jual):
            ?>                    
                        <tr>
                        <td><?= $jual['kdpenjualan'];?></td>
                        <td><?= $jual['kdkasir'];?></td>
                        <td><?= $jual['kdbarang'];?></td>
                        <td><?= $jual['tanggal'];?></td>
                        <td><?= $jual['jumlahbeli'];?></td>
                        <td>
                          <a href="/swalayan/penjualan/add/" class="badge badge-success float-right">Tambah Penjualan</a>
                        </td>
                        <td>
                          <a href="/swalayan/penjualan/edit/{{ $jual['kdpenjualan'] }}" class="badge badge-primary float-right">Edit</a>
                        </td>
                        <td>
                          <a href="/swalayan/penjualan/delete/{{ $jual['kdpenjualan'] }}"
                class="badge badge-danger float-right"
                onclick = " return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                        </td>
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