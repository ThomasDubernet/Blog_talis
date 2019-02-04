<?php
session_start();
session_destroy();
header('Location: ../index.php');
echo "<script>alert('Vous êtes déconnecté')</script>";
