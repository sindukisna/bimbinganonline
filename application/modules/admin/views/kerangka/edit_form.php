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
          
          

      

         <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">mahasiswa</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>

        <!-- Icon Cards-->
        
        <!-- DataTables Example -->
       <div id="content-wrapper">

      <div class="container-fluid">

        
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <!-- Card  -->
        <div class="card mb-3">
          <div class="card-header">

            <a href="<?php echo site_url('coba/mhs/') ?>"><i class="fas fa-arrow-left"></i>
              Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('judul/edit') ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $product->idbs ?>" />

              <div class="form-group">
                <label for="name">Judul Bab*</label>
                <input class="form-control <?php echo form_error('judul_bab') ? 'is-invalid':'' ?>"
                 type="text" name="judul_bab" placeholder="judul_bab" value="<?php echo $product->judul_bab ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('judul_bab') ?>
                </div>
              </div>

              


              

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>


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