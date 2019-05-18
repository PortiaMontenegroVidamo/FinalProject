<?php 

$connection = mysqli_connect('localhost', 'root', '', 'pmdb');

if ($connection){
	echo "Connected";
}else {
	die();
}






?>