 @extends('master')

 @section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kasir</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kasir</li>
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
                      
                      <th>Kode Kasir</th>
                      <th>Nama Kasir</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                      <!-- <th>Tambah Kasir</th>
                      <th>Edit Kasir</th>
                      <th>Hapus Kasir</th> -->
                    </tr>
                  </thead>
                  
                  <tbody>
                     <?php 
            foreach ($kasir as $kas):
            ?>                    
                        <tr>

                        <td><?= $kas['kdkasir'];?></td>
                        <td><?= $kas['namakasir'];?></td>
                        <td><?= $kas['alamat'];?></td>
                        <td><?= $kas['telepon'];?></td>
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