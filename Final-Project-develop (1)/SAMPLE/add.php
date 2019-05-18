<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
        
    // checking empty fields
    if(empty($title) || empty($author) || empty($content)) {                
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($author)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
        
        if(empty($content)) {
            echo "<font color='red'>Content field is empty.</font><br/>";
        }
        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO articledraft(title,author,content) VALUES('$title','$author','$content')");
        
        //display success message
        echo "<font color='green'>Data added successfully.";
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>