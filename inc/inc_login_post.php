<?php
    echo "<pre>";
    var_dump($_GET);
    echo "</pre>";


    if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin"){
        echo "Bonjour " . $_POST["pseudo"];
    }

    // elseif($_POST["pseudo"] != "admin" || $_POST["password"] != "admin"){
    //     echo "<script>alert('Vous vous êtes tromper, try again !');</script>";
    //     header('Location: ../index.php?message=Erreur_password');
    // }

    //             OU 

    elseif($_POST["pseudo"] !== "admin"){
        header('Location: ../index.php?message=Erreur_pseudo');
    }
    elseif($_POST["password"] !== "admin"){
        header('Location: ../index.php?message=Erreur_password');
    }