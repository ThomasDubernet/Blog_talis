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
    <section id="articles">
    <ul>
    <?php allTitlesDisplay(); ?>
    </ul>
   

<!-- Modal -->
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <label for="">Titre: </label>
        <input type="text"name="title_article" placeholder="New Title">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" name="content_article">
        <textarea cols="30" rows="10">Texte existant<br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ea.</textarea>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"><a href="inc/update.php?id="<?php echo $row["id"]?>>Save Change</a></button>
      </div>
    </div>
  </div>
</div>
    </section>
   
<!-- Scripts -->
<?php include_once("inc/inc_scripts.php"); ?>
</body>
</html>