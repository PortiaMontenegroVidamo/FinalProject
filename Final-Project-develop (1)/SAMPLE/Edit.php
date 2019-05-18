<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $title=$_POST['title'];
    $author=$_POST['author'];
    $content=$_POST['content'];    
    
    // checking empty fields
    if(empty($title) || empty($author) || empty($content)) {            
        if(empty($title)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($author)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($content)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE articledraft SET title='$title',author='$author',content='$content' WHERE id=$id");
        
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
    $title = $res['title'];
    $author = $res['author'];
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
                <td>Title</td>
                <td><input type="text" name="title" value="<?php echo $title;?>"></td>
            </tr>
            <tr> 
                <td>Author</td>
                <td><input type="text" name="author" value="<?php echo $author;?>"></td>
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