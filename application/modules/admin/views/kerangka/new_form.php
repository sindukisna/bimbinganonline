<!DOCTYPE html>
<html lang="en">

<head>
    <!--HEAD -->
    <?php $this->load->view("dsn/_partials/head.php") ?>  
  <!-- END HEAD -->
</head>

<body>

  <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
           <h4>Daftar Kelas</h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>

         </div>
         <div class="modal-body">

          <div class="container">
   <div class="row">
      <div class="col-md-12">
         
            
         <form action="<?php echo site_url('dsn/submit_kelas') ?>" method="POST">
          
           <div class="form-group">
             <label for="inputAddress">Kode Grup :</label>
             <input type="text"  class="form-control" id="inputAddress" readonly value="<?php echo substr(uniqid(), 3,6); ?>" name="kodegrup" >
           </div>
           <div class="form-group">
             <label for="inputAddress2">Nama Kelas :</label>
             <input type="text" name="nama_kelas" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
           </div>
           <div class="form-row">
             <div class="form-group col-md-4">
               <label for="inputState">State</label>
               <select id="inputState" class="form-control" name="periode">
                 <option selected>Choose...</option>
                 <option value="3">3 bulan</option>
                 <option value="6">6 bulan</option>
               </select>
             </div>
             
             <div class="form-group col-md-4">
               <label for="inputState">Kategori</label>
               <select id="inputState" class="form-control" name="kategori">
                 <option selected>Choose...</option>
                 <option>Ganjil</option>
                 <option>Genap</option>
               </select>
             </div>

           </div>
           <div class="form-group">
             
           </div>
                    <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Daftar</button>
         </div>
         </form>

      </div>
      <div class="col-md-4">
      </div>
   </div>
</div>


         </div>


      </div>
   </div>
  </div>

  <div class="container-scroller">
      <!-- NAVBAR -->
        <?php $this->load->view("dsn/_partials/navbar.php") ?>
      <!-- END OFF NAVBAR -->
    
    <div class="container-fluid page-body-wrapper">
      
          <!-- SIDEBAR -->
            <?php $this->load->view("dsn/_partials/sidebar.php") ?>
          <!-- END SIDEBAR -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          

      

         <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Kerangka</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>

        

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/index/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('coba/add') ?>" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="name">Bab*</label>
                <input class="form-control <?php echo form_error('id_sub') ? 'is-invalid':'' ?>"
                 type="text" name="id_sub" placeholder="Product name" />
                <div class="invalid-feedback">
                  <?php echo form_error('id_sub') ?>
                </div>
              </div>


              <div class="form-group">
                <label for="name">Sub Bab*</label>
                <input class="form-control <?php echo form_error('judul_subab') ? 'is-invalid':'' ?>"
                 type="text" name="judul_subab" placeholder="Product name" />
                <div class="invalid-feedback">
                  <?php echo form_error('judul_subab') ?>
                </div>
              </div>


              

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
       



         
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
         
         

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
          <!-- FOOTER -->
            <?php $this->load->view("dsn/_partials/footer.php") ?>
          <!-- END FOOTER -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
    <!-- JAVASCRIPT -->
      <?php $this->load->view("dsn/_partials/js.php") ?>
    <!-- END JAVASCRIPT -->
</body>

</html>