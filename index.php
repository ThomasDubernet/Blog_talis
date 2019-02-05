
    <?php include("inc/inc_head.php"); ?>

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