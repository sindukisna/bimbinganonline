<!DOCTYPE html>
<html>
<head>
   <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>
<body>


<div class="container">
   <div class="row">
      <div class="col-md-8">
         <h2>Belajar CRUD Dengan OOP PHP dan Ajax</h2>
            
         <form>
           <div class="form-group">
             <label for="inputAddress">Kode Grup :</label>
            <input type="text" class="form-control" id="inputAddress" readonly value="<?php echo substr(uniqid(), 1,6); ?>" >
           </div>
           <div class="form-group">
             <label for="inputAddress2">Nama Kelas :</label>
             <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
           </div>
           <div class="form-row">
             <div class="form-group col-md-4">
               <label for="inputState">State</label>
               <select id="inputState" class="form-control">
                 <option selected>Choose...</option>
                 <option>3 bulan</option>
                 <option>6 bulan</option>
               </select>
             </div>
             
             <div class="form-group col-md-4">
               <label for="inputState">Kategori</label>
               <select id="inputState" class="form-control">
                 <option selected>Choose...</option>
                 <option>Ganjil</option>
                 <option>Genap</option>
               </select>
             </div>

           </div>
           <div class="form-group">
             <div class="form-check">
               <input class="form-check-input" type="checkbox" id="gridCheck">
               <label class="form-check-label" for="gridCheck">
                 Check me out
               </label>
             </div>
           </div>
           <button type="submit" class="btn btn-primary">Sign in</button>
         </form>

      </div>
      <div class="col-md-4">
      </div>
   </div>
</div>



</body>

</html>

