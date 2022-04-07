<?php 
include_once "header.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";

 ?>
 <form action="" method="post" class="m-5">
   <div class="form-row">
     <div class="form-group col-md-6 my-5">
       <input type="text" name="username" class="form-control" placeholder="User Name">
     </div>
     <div class="form-group col-md-6 my-5">
    <input type="password" name="pass" class="form-control"  placeholder="Password">
     </div>
   </div>
     <button type="submit" class="btn btn-primary">Login</button>
 </form>
 <?php 
include_once "footer.php";

 ?>


<!--  https://github.com/EcoinWebDev/web101 -->