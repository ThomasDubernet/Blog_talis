<?php
    $sql_host = "localhost";
    $sql_admin = "root";
    $sql_password = "";
    $sql_db = "Blog_talis";

    try {
        $db = new PDO("mysql:host=$sql_host;dbname=$sql_db", $sql_admin, $sql_password);
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

?>