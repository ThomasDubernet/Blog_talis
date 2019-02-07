<?php
session_start();
require "database.php";
$title_article =$_GET["title_article"];
$content_article =$_GET["content_article"];


$req = PDO::prepare("UPDATE posts SET title= '$title_article', content= '$content_article' ");
$req_modif-> query($req);
header('Location: admin.php?message=Succes for update');
?>