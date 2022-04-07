<?php 
include 'header.php'; 
require 'data.php';

$com  = (isset($_GET['code']))?$_GET['code']:null;

/*if(isset($_GET['code']))
   $com = $_GET['code'];
else $com = null;*/
//print_r($com);
?>
<ul class="list-group">
	<?php foreach ($wilaya as $c => $w) { ?>
  <li class="list-group-item"><a href="list.php?code=<?= $c ?>"><?= $w ?></a></li>
  <?php }  ?>
</ul>

<hr>
<?php if ($com!=null) { 

	?>
<ul class="list-group">
	<?php foreach ($commune[$com] as  $k=>$c) { ?>
  <li class="list-group-item"><?= $c ?></li>
  <?php }  ?>
</ul>

<?php }

 else echo "<h3>No data </h3>";
 ?>
<?php include 'footer.php'; ?>
