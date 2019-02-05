<?php
require('database.php');
$numero_id = $_GET["id"];


$req = $db->prepare("DELETE FROM posts WHERE id = $numero_id ");
$req->execute();

header('Location: ../admin.php?message=Success to delete')
?>