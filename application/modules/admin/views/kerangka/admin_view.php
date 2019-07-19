<!DOCTYPE html>
<html lang="en">

<head><title></title>
  <style type="text/css">
      body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border-color: #ccc;
        }
  </style>
  	<!--HEAD -->
		<?php $this->load->view("dsn/_partials/head.php") ?>  
  <!-- END HEAD -->
</head>

<body>

  






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
          <li class="breadcrumb-item active">mahasiswa</li>
        </ol>

        <!-- Icon Cards-->
        
        <!-- DataTables Example -->
       <div class="card mb-3">
         <div class="card-header">
            <a href="<?php echo site_url('admin/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Bab</th>
                          <th>Sub Bab</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; foreach($kerangkas as $product) { ?>
                      <tr class="odd gradeX">
                          <td><?php echo $i ?></td>
                          <td><?php echo $product->id_sub ?></td>
                          <td><?php echo $product->judul_subab ?></td>
                          <td>
                          <a href="<?php echo site_url('admin/edit/'.$product->idb) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          <a onclick="deleteConfirm('<?php echo site_url('admin/delete/'.$product->idb) ?>')"
                          href="<?php echo site_url('admin/delete/'.$product->idb) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                          
                          
                          
                          </td>
                      </tr>
                  <?php $i++; } ?>
                  </tbody>
                  </table>
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