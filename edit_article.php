<?php include_once("inc/inc_head.php"); 
$req_row = $db->prepare("SELECT * FROM posts");
$req_row->execute();
$row = $req_row->fetch(PDO::FETCH_ASSOC);
?>

<body>
    <header class="text-center">
        <?php require('inc/nav-bar.php'); ?>
        <h1 class="text-center">Ma page Edit</h1>
        
    </header>    

    <section class="text-center" id="form_edit">
    <form action="inc/update.php">
        <label for="">Titre</label><br>
        <input type="text" name="title_article" placeholder="<?php echo $row["title"];?>"><br>
        <label for="">Message</label><br>
        <textarea name="content_article" cols="30" rows="10"><?php echo $row["content"];?></textarea><br>
        <input type="submit">
    </form>
    </section>


<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>