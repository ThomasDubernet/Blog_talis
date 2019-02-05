<?php include("inc/inc_head.php"); 

if(isset($_GET["message"])){
    echo $_GET["message"];
}
?>
<body>


    <header class="text-center">
    <?php require('inc/nav-bar.php'); ?>
        <h1>Ma page Admin</h1>
        
    </header>
    <section id="add_post">
    <a href="add_post.php">Ajouter une nouvelle annonce</a>
    </section>

   
<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>