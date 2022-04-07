<?php 

print_r($_GET);
echo "<br>";
echo $_GET['page'];

switch ($_GET['page']) {
	case 'service':
		include "service.php";
		break;
	case 'about':
		include "about.php";
		break;	
	case 'contact':
		include "contact.php";
		break;		
	default:
		break;
}

 ?>
<hr>


<ul>
	<li><a href="request.php">Home</a></li>
	<li><a href="request.php?page=service">Service</a></li>
	<li><a href="request.php?page=about">About Us</a></li>
	<li><a href="request.php?page=contact">Contact Us</a></li>
</ul>