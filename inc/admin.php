<?php
session_start();
if(!isset($_SESSION["pseudo"])){
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc_head.php"); ?>
</head>
<body>
    <header class="text-center">
    <?php require('nav-bar.php'); ?>
        <h1>Ma page Admin</h1>
        
    </header>
    

   
<!-- Scripts -->
<?php include_once("inc_scripts.php"); ?>
</body>
</html>