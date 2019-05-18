<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM articledraft ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <a href="add.html">Add New Data</a><br/><br/>
 
    <table width='80%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Title</td>
            <td>Author</td>
            <td>Date</td>
            <td>Content</td>
            <td>image</td>
            <td>Category</td>
            <td>Status</td>
            <td>Update</td>
        </tr>
        <?php 
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['title']."</td>";
            echo "<td>".$res['author']."</td>";
            echo "<td>".$res['date']."</td>";    
            echo "<td>".$res['content']."</td>";


            

            

            echo "<td>".$res['image']."</td>";



            echo "<td>".$res['category']."</td>";
            echo "<td>".$res['status']."</td>";
            echo "<td><a href=\"Edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>