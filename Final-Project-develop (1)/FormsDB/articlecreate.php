


<?php

require("dbarticle.php");


if(isset($_GET['submit'])){
      $title = $_GET["title"];
      $author = $_GET["author"];
      $content = $_GET["content"];
      $image = $_GET["image"];
      $category = $_GET["category"];

      $connection = mysqli_connect('localhost', 'root', '', 'pmdb');

      
      // if($connection){
      //     echo "We are connected";
      //   }else {
      //     die("DB connection failed");
      //   }

      if(!$connection){
        die("DB connection failed");
      }

      $query = "INSERT INTO article (title,author,content,image,category) VALUES ('$title', '$author', '$content', '$image', '$category')";

      $result = mysqli_query($connection, $query);


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

  <title>ARTICLE</title>
</head>
<body>
<form method="get" action="articlecreate.php">
  <fieldset>
    <legend>ARTICLE FORM</legend>
 <div class="form-group">
      <label>Article ID</label>
      <select>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>

    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control">
    </div>

     <div class="form-group">
      <label>Author</label>
      <input type="text" class="form-control">
    </div>

    <div class="form-group">
      <label>Date</label>
      <input type="date" class="form-control">
    </div>

    <div class="form-group">
      <label>Content</label>
      <textarea class="form-control" id="exampleTextarea" rows="7"></textarea>
    </div>

      <div class="form-group">
      <label>Image</label>
      <textarea class="form-control" id="exampleTextarea" rows="5"></textarea>
    </div>
     <div class="form-group">
     <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    </div>

    
    <div class="form-group">
      <label>Category</label>
      <select class="form-control">
        <option>Photography</option>
        <option>Tutorial</option>
      </select>
    </div>
   


    
    <button type="submit" name="submit" value="create" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</body>
</html>