<?php
require('database.php');
$numero_id = $_GET["id"];
$title_article = $_POST["title_article"];
$content_article = $_POST["content_article"];


$req = $db->prepare("UPDATE posts SET title= :title_article, content= :content_article ");
$req->execute(array(
    "title_article" => $title_article,
    "content_article" => $content_article
));
header('Location: admin.php?message=Succes for update');
?>