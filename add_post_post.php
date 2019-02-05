<?php
session_start();
require "inc/database.php";
// prepare REQ
// Execute REQ
// Redirect to admin + message

$title = $_POST["title"];
$content = $_POST["content"];

    $sql_req = $db ->prepare("INSERT INTO  posts (title, content) VALUES (:title, :content) ");
    $sql_req->execute(array(
        "title" => $title,
        "content" => $content
    ));
    header('Location: admin.php?message=Success to insert');
  