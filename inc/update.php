<?php
require('database.php');
$numero_id = $_GET["id"];
$title_article = $_POST["title_article"];
$content_article = $_POST["content_article"];


$req = $db->prepare("UPDATE posts SET title= ");
$req->execute();
?>