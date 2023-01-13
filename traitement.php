<?php
    session_start();
    $_SESSION['nom'] = $_POST['name'];
    $_SESSION['prenom'] = $_POST['forename'];
    $_SESSION['birth'] = $_POST['birth'];
    $_SESSION['email'] = $_POST['email'];

    header("Location: index.php");


