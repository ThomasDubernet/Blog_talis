<?php 
    session_start();
    require('inc/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once("inc/inc_head.php"); ?>
</head>
<body>
    <header class="text-center">
        <h1>Mon premier authentificator</h1>
    </header>
    
    <section id="login">
    <?php include_once('inc/inc_login.php'); 
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
    ?>


    </section>

   
<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>