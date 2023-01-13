<?php
$bdd = new PDO("mysql:dbname=agnhen_projgit;host=localhost", "root", "");
$req = $bdd->prepare("INSERT INTO utilisateur (nom, prenom, date_anniversaire, email, mdp) VALUES (:nom, :prenom, :date_an, :email, :mdp)");
$req->execute(array('nom'=> $_POST['name'], 'prenom' => $_POST['forname'], 'date_an' => $_POST['birth'], 'email'=>$_POST['email'], 'mdp'=>$_POST['pass']));
    session_start();
    $_SESSION['nom'] = $_POST['name'];
    $_SESSION['prenom'] = $_POST['forname'];
    $_SESSION['birth'] = $_POST['birth'];
    $_SESSION['email'] = $_POST['email'];

    header("Location: connexion.php");


