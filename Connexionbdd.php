<?php

class connexionbdd
{
private $nombdd;
private $host;
private $username;
private $pass;
private $bdd;
public function cobdd($nombdd, $username, $host, $pass){
    $this->pass=$pass;
    $this->host=$host;
    $this->username=$username;
    $this->nombdd=$nombdd;
    $this->bdd = new PDO("mysql:dbname=" .$nombdd .";host=" .$host, $username, $pass);
}
}