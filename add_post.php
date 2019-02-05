<?php require("inc/inc_head.php"); ?>
<body>
    <header class="text-center">
    <?php require('inc/nav-bar.php'); ?>
        <h1>Ma page Add post</h1>
        
    </header>
    
    <form action="add_post_post.php" method="post">
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="Content"></textarea>
        <input type="submit">
    </form>
   
<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>