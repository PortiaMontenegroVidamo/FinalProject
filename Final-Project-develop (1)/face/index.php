<?php
        if (isset($_POST['submit'])){
            // $username = $_POST["username"];
            // $password = $_POST["password"];
            $title = $_POST["article_title"];
            $author = $_POST["author"];
            $content = $_POST["content"];

            $connection = mysqli_connect("localhost", "root", "", "pmdb");

                if($connection){
                    echo "We are connected";
                }else {
                    die("DB connection failed");
                }


                //CREATE insert

                $query = "INSERT INTO articledraft (title,author,content) VALUES ('$title', '$author', '$content')";
                $result = mysqli_query($connection, $query);
                //validation
                if (!$result){
                    die('Query FAILED' .mysqli_error());
                }

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
</head>
<body>
<form method="post" action="index.php">
<!-- include navbar using php -->
<nav class="menu-web">
        <div class="menu-container">
            <div class="brand-name" >
                <p class="logo"><a href="index.php">Peter Mckinnon</a></p>
            </div>
            <div class="navbar-menu">
                    <div class="search-bar"><input type="search" name="" id="article-search" placeholder="Search"></div>
                <ul>
                    <!-- <li><input type="search" name="" id="article-search" placeholder="Search"></li> -->
                    <li class="menu-btn"><a href="#">Articles</a></li>
                    <li class="menu-btn"><a href="#">Profile</a></li>
                    <li class="menu-btn"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="menu-wrap-hamburger">
            <input type="checkbox" class="toggler">
            <div class="hamburger"><div></div></div>
            <div class="menu">
                <div>
                <div>
                    <ul class="search-bar-right">
                        <li class="menu-btn"><a href="index.html">Home</a></li>
                        <li class="menu-btn"><a href="#">Articles</a></li>
                        <li class="menu-btn"><a href="#">Profile</a></li>
                        <li class="menu-btn"><a href="#">Contact</a></li>
                        <li><input type="search" name="" id="article-search" placeholder="Search"></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </nav>

    <form class="create-article" method="POST">
        <div class="article-editor text bg-primary mb-3">
            <!-- <div class="card-header">What's going on?</div> -->
            <div class="card-body">
                <h6 class="card-title"><label>Title</label>
                <input type="text" class="form-control" name="article_title" placeholder="Title"></h6>
                <input type="text" class="form-control" name="author" placeholder="Title"></h6>
                <h6 class="card-title"><label>Upload Thumbnail</label>
                <div class="input-group-append"><input class="input-group-text" type="file">
                        <!-- <span class="input-group-text">Upload</span> -->
                      </div></h6>
                <h6 class="card-title"><label>Content</label></h6>
                <textarea class="text-primary" id="editor" name="content" placeholder="Some quick example text to build on the card title and make up the bulk of the card's content."></textarea>
                <hr class="my-4">
                <button type="button" class="btn btn-outline-success">Publish now</button>
                
                <button type="button" class="btn btn-outline-danger">Cancel</button>
                <input type="submit" name="submit" value="create" class="btn btn-primary">
            </div>
        </div>
    </form>







<script>

var editor = new Jodit('#editor');
editor.value = '<p>start</p>';

// $('textarea').each(function () {
//     var editor = new Jodit(this);
//     editor.value = '<p>start</p>';
// });
</script>

</body>
</html>