<?php 
include_once "header.php";
//get
// get post
 ?>
 <form action="result.php" method="get" class="m-5">
   <div class="form-row">
     <div class="form-group col-md-6 my-5">
       <input type="search" name="nom" class="form-control" id="search" placeholder="Search">
     </div>
     <div class="form-group col-md-6 my-5">
    <input type="text" name="email" class="form-control" id="email" placeholder="Email">
     </div>
   </div>
     <button type="submit" class="btn btn-primary">Search</button>
 </form>
 <?php 
include_once "footer.php";

 ?>