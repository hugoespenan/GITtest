<?php
require_once 'Connexionbdd.php';
class Utilisateur
{
private $nom;
private $prenom;
private $date;
private $email;
private $mdp;
public function __construct($nom, $prenom, $date, $email, $mdp){
    $this->prenom=$prenom;
    $this->nom=$nom;
    $this->email=$email;
    $this->date=$date;
    $this->mdp=$mdp;
}
public function inscription(){
    $co = new connexionbdd();
    $co->cobdd("agn_hen_projetgit", "root", "localhost", "");
    $req = $co->cobdd()->prepare("INSERT INTO utilisateur (nom, prenom, date_anniversaire, email, mdp) VALUES (:nom, :prenom, :date_an, :email, :mdp)");
    $req->execute(array('nom'=> $_POST['name'], 'prenom' => $_POST['forname'], 'date_an' => $_POST['birth'], 'email'=>$_POST['email'], 'mdp'=>$_POST['pass']));
}
public function connexion(){
    
}
}