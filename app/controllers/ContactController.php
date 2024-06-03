<?php

namespace app\controllers;
use app\controllers\Controller;
use PDO;

class ContactController
{
  public function index()
  {
      $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]); 
  
      $stmt = $db->prepare("SELECT * FROM usuarios");
      $stmt->execute();
      $usuarios = $stmt->fetchAll();
  
      if ($stmt->rowCount() > 0) {
          Controller::view("contact", ["user" => $usuarios]); // Use $usuarios instead of $stmt
      } else {
          Controller::view("contact", ["msg" => "Nenhum usuário cadastrado"]);
      }
  }
  

  public function store($params)
  {
    $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]); 

    $stmt = $db->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
    $stmt->bindParam(':nome', $params->name);
    $stmt->bindParam(':email', $params->email);
    $stmt->execute();

    Controller::view("contact");
  }

  public function create()
  {
    Controller::view("contactCreate");
  }
}

