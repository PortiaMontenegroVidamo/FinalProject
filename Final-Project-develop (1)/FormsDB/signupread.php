

<?php
		$connection = mysqli_connect('localhost', 'root', '', 'pmdb');
				
				if ($connection){
					echo "We are connected";
				}else {
					die("DB connection failed");
				}

				$query = "SELECT * FROM author";
				$result = mysqli_query($connection,$query);

				if(!$result){
					die('query failed' . mysqli_error());
				}


?>




<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="utf-8">
    <title>Bootswatch: Lux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <link rel="stylesheet" href="../4/lux/bootstrap.css" media="screen"> -->
    <!-- <link rel="stylesheet" href="../_assets/css/custom.min.css"> -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
	<title>Sign UP READ</title>
</head>
<body>

<div class="container" style="background-color: primary">
		<div class="col-lg-6" style="background-color: gray">
				<?php
					while($row = mysqli_fetch_assoc($result)){
				?>		
				<pre>
				<?php
						//print_r($row);
						echo $row['password'];
				?>
			    </pre>
				<?php
					}
				?>	
		</div>
		
	</div>


</body>
</html>




