<nav>
    <div class="row">
        <a href="#">Acceuil</a>
        <?php
        if(isset($_SESSION["pseudo"])){
        echo '<a href="inc/admin.php">Admin</a>';
        }
        ?>
        <a href="admin.php">Admin</a>
        <?php
        if(isset($_SESSION["pseudo"])){
            echo '<a href="disconnect.php">Disconnect</a>';
        }
        else if (!isset($_SESSION["pseudo"])){
            echo '<a href="../index.php">Login</a>';
        }
        ?>
    </div>
</nav>