<?php
include 'dbarticle.php';

function showData(){
	global $connection;
	$query = "SELECT * FROM article";
	$result = mysqli_query($connection,$query);

	if(!$query){
	die('Query failed' . mysqli_error());
	} 

	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];
		$username = $row['username'];
		echo "<option value='$admin_id'>$admin_id . $username</option>";
	}


}


function updateTable(){
	global $connection;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$admin_id = $_POST['admin_id'];

	$query = "UPDATE author SET firstname = '$firstname', lastname = '$lastname', username = '$username', email = '$email', password = '$password' WHERE admin_id = $admin_id";
	$result = mysqli_query($connection,$query);

	
}


function deleteTable(){
	global $connection;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$admin_id = $_POST['admin_id'];

	// $query = "DELETE FROM users SET username = '$username', password = '$password' WHERE id = $id";
	$query = "DELETE FROM author WHERE admin_id = '$admin_id'";
	$result = mysqli_query($connection,$query);

	
}

function redirect($site){