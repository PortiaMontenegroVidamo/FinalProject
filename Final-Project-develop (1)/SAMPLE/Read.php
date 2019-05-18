
<?php
		$connection = mysqli_connect('localhost', 'root', '', 'pmdb');
				
				if ($connection){
					echo "We are connected";
				}else {
					die("DB connection failed");
				}

				$query = "SELECT * FROM articledraft";
				$result = mysqli_query($connection,$query);

				if(!$result){
					die('query failed' . mysqli_error());
				}


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peter Mckinnon TEST</title>
    
 <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.1.92/jodit.min.js"></script>

	<title>READ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
						echo $row['title'];
				?>
			    </pre>
				<?php
					}
				?>	
		</div>
		
	</div>

</body>
</html>