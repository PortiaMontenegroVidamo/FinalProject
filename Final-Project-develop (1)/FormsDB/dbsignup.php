<?php

$connection = mysqli_connect('localhost', 'root', '', 'pmdb');



if($connection){
	echo "We are connected";
	} else {
		die();
}
	// if (!$connection){	
	// 	die("DB connection failed");
	// }


?>