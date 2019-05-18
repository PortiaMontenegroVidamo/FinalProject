<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $author=$_POST['author'];
    $title=$_POST['title'];
    $content=$_POST['content'];    
    
    // checking empty fields
    if(empty($author) || empty($title) || empty($content)) {            
        if(empty($author)) {
            echo "<font color='red'>Author field is empty.</font><br/>";
        }
        
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($content)) {
            echo "<font color='red'>Content field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE articledraft SET author='$author',title='$title',content='$content' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM articledraft WHERE id=$id");
 
while($res = mysqli_fetch_array($result))
{
    $author = $res['author'];
    $title = $res['title'];
    $content = $res['content'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Author</td>
                <td><input type="text" name="author" value="<?php echo $author;?>"></td>
            </tr>
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Content</td>
                <td><input type="text" name="content" value="<?php echo $content;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>