<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<div class="container">
  		<div class="row">
		
		<?php if (! $data_member) { // jika tidak ada data member ?>
	  		<div class="col-md-6">
	  			<h3>Belum punya akun</h3>
	  			<a href="<?php echo site_url('member/register_member') ?>" class="btn btn-primary mb-2">Register</a>
	  		</div>
	  		<div class="col-md-6">
	  			  <?php echo form_open('member/member_login') ?>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Username</label>
				    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter usermane">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				<?php echo form_close() ?>
	  		</div>	
		<?php } else { // jika ada data member dan berhasil login?>
				<div class="card">
				<a href="" class="text-right"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698400-icon-136-document-edit-128.png" alt="" width="30"></a>
					<img class="card-img-top rounded-circle" style="width: 250px;" src="<?php echo base_url() ?>/images/<?php echo $data_member->image ?>">
					<table class="table">
					    <tr>
					      <th scope="col">Nama :</th>
					      <td><h5 class="card-title"><?php echo $data_member->member_name ?></h5></td>
					    </tr>
					     <tr>
					      <th scope="col">Email :</th>
					      <td><p class="card-text"><?php echo $data_member->email ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Telepone :</th>
					      <td><p class="card-text"><?php echo $data_member->telp ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Alamat :</th>
					      <td><p class="card-text"><?php echo $data_member->address ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Username :</th>
					      <td><p class="card-text"><?php echo $data_member->username ?></p></td>
					    </tr>
					     <tr>
					      <th scope="col">Password :</th>
					      <td> <p class="card-text">***</p></td>
					    </tr>
					     <tr>
					      <th scope="col">Join :</th>
					      <td> <p class="card-text"><?php echo date('d/m/Y', strtotime($data_member->join)) ?></p></td>
					    </tr>
					</table>
				</div>
		<?php } ?>
  	</div>
  </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>