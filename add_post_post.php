<?php
session_start();
require "database.php";
// prepare REQ
// Execute REQ
// Redirect to admin + message




try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql ="INSERT INTO `posts`(`title`, `content`) VALUES ("$_POST["title"]", "$_POST["content"]") ";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;
?>