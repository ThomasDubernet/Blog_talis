<?php include("inc/inc_head.php"); ?>
<body>


    <header class="text-center">
    <?php require('inc/nav-bar.php'); ?>
        <h1>Home</h1>
        
    </header>
    <section id="posts">
    <div class="container-fluid">
        <h3 class="text-center">Annonces récentes</h3>
        <div class="row">
        <?php allArticlesDisplay(); ?>
        </div>
        <h3 href="#" class="text-center btn btn-primary">Toutes les annonces</h3>
    </div>
    </section>

   
<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>