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
       <div class="card mb-3">
         <div class="card-header">
            <a href="<?php echo site_url('mhs/judul/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Judul Bab</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach($bimbingan as $product) { ?>
                      <tr class="odd gradeX">
                          <td><?php echo $i ?></td>
                          <td><?php echo $product->judul_bab ?></td>
                          <td>
                          <a href="<?php echo site_url('mhs/judul/edit/'.$product->idbs) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          <a onclick="deleteConfirm('<?php echo site_url('judul/delete/'.$product->idbs) ?>')"
                          href="<?php echo site_url('mhs/judul/delete/'.$product->idbs) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          
                          
                          
                          </td>
                      </tr>
                  <?php $i++; } ?>
                  </tbody>
                  </table>
            </div>
         


         
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>  


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