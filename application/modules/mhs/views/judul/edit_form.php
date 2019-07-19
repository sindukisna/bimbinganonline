<!DOCTYPE html>
<html lang="en">

<head>
  	<!--HEAD -->
		<?php $this->load->view("mhs/_partials/head.php") ?>  
  <!-- END HEAD -->
</head>

<body>

    <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
           <h4>Kode Kelas</h4>

            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>

         </div>
         <div class="modal-body">

          <div class="container">
   <div class="row">
      <div class="col-md-12">
         
            
         <form action="<?php echo site_url('mhs/join_kelas') ?>" method="POST">
          <input type="hidden" name="nim" value="<?php echo $this->session->userdata('ses_idm'); ?>">
           <div class="form-group">
             <label for="inputAddress">Kode Grup :</label>
             <input type="text"  class="form-control" id="inputAddress" name="kodegrup" placeholder="Masukan Kode Grup" >
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
    		<?php $this->load->view("mhs/_partials/navbar.php") ?>
    	<!-- END OFF NAVBAR -->
    
    <div class="container-fluid page-body-wrapper">
      
      		<!-- SIDEBAR -->
      			<?php $this->load->view("mhs/_partials/sidebar.php") ?>
      		<!-- END SIDEBAR -->
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          

         
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  
                 
                          <!-- DataTables Example -->
                 
                         <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a href="#">Dashboard</a>
                          </li>
                          <li class="breadcrumb-item active">Judul</li>
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

                            <form action="<?php base_url('judul/add') ?>" method="post" enctype="multipart/form-data" >
                              <div class="form-group">
                                <label for="name">Judul Bab*</label>
                                <input class="form-control <?php echo form_error('judul_bab') ? 'is-invalid':'' ?>"
                                 type="text" name="judul_bab" placeholder="Judul Bab" />
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
              </div>
            </div>
          </div>
          
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        	<!-- FOOTER -->
        		<?php $this->load->view("mhs/_partials/footer.php") ?>
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
  		<?php $this->load->view("mhs/_partials/js.php") ?>
  	<!-- END JAVASCRIPT -->
</body>

</html>