    
    
<?php 
    session_start();
    require('inc/database.php');
    // if(!isset($_SESSION["pseudo"])){
    //     header('Location: index.php');
    // }

    function allArticlesDisplay (){
        global $db;
        $req = $db->prepare("SELECT * FROM posts ");
        $req->execute();
        if(isset($req)){
            while($row= $req->fetch(PDO::FETCH_ASSOC)){
                ?>
                <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                                <p class="card-text"><?php echo $row["content"]; ?></p>
                                <a href="#" class="card-link">Go somewhere</a>
                            </div>
                            </div>
                            <?php
            }
        }

    }
    function allTitlesDisplay (){
        global $db;
        $req = $db->prepare("SELECT * FROM posts ");
        $req->execute();
        if(isset($req)){
            while($row= $req->fetch(PDO::FETCH_ASSOC)){
                ?>
                                <li class="card-text">
                                    <?php echo $row["title"]; ?> 
                                    <a href="edit_article.php?id=<?php echo $row["id"]?>"><i class="fas fa-dharmachakra"></i></a>
                                    <a href="inc/delete.php?id=<?php echo $row["id"]?>"><i class="fas fa-times"></i></a>
                                </li>
 
                            <?php
            }
        }

    }
    
    
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
</head>
