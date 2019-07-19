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
		<?php $this->load->view("mhs/_partials/head.php") ?>
    <script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript"> 

    tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>


  <!-- END HEAD -->
</head>

<body>


  <div class="container-scroller">
    	<!-- NAVBAR -->
    		<?php $this->load->view("mhs/_partials/navbar.php") ?>
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
         <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('admin/index/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>

        <!-- Icon Cards-->
        
        <!-- DataTables Example -->
       <div class="card mb-3">
          <div class="card-body">


            <div class="table-responsive">

                

               <?php
              // Error
              if(isset($error)) {
                echo '<div class="alert alert-warning">';
                echo $error;
                echo '</div>';
              }

             
              

              // Form
              echo form_open_multipart('mhs/isi/add');
              ?>
             
           

              <div class="col-md-6">
              <div class="form-group">
              <label>Sub Bab</label>
              
                  
              <div class="controls">
                      <select required name="id_sub">
                        <option value="" disabled diselected>-- Pilih Bidang --</option>
                      <?php                                
                      foreach ($kerangkas as $product) {  
                    echo "<option value='".$product->idb."'>".$product->id_sub." ".$product->judul_subab."</option>";
                    }
                    echo"</select>"
                  ?>





                  </div>

              </div>
              </div>

              <div class="col-md-12">

              <div class="form-group">
              <label>Keterangan</label>
              <textarea name="konten" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo set_value('konten') ?></textarea>
              </div>

              <div class="form-group">
              <input type="submit" name="submit" value="Save" class="btn btn-primary btn-lg">
              <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
              </div>

              </div>


              <?php echo form_close() ?>

               


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