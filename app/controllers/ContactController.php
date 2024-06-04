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

    $stmt = $db->prepare("SELECT * FROM usuarios ORDER BY id DESC");
    $stmt->execute();
    $usuarios = $stmt->fetchAll();
    Controller::view("usuarios/contact", ["user" => $usuarios]);
  }


  public function store($params)
  {
    $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    if (empty($params->name) || empty($params->email)) {
      $msg = "Preencha todos os campos";
      Controller::view("usuarios/contactCreate", ["msg" => $msg]);
      return;
    }

    $stmt = $db->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $params->email);
    $stmt->execute();
    $usuario = $stmt->fetch();

    if ($usuario) {
      $msg = "Email já cadastrado";
      Controller::view("usuarios/contactCreate", ["msg" => $msg]);
      return;
    } else {
      $stmt = $db->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
      $stmt->bindParam(':nome', $params->name);
      $stmt->bindParam(':email', $params->email);
      $stmt->execute();
    }
    header("Location: /contact");
  }

  public function delete($params)
  {
    $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $db->prepare("DELETE FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $params->id);
    $stmt->execute();

    header("Location: /contact");
  }

  public function edit($params)
  {
    $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindParam(':id', $params->id);
    $stmt->execute();
    $usuario = $stmt->fetch();

    Controller::view("usuarios/editContact", ["usuario" => $usuario]);
  }

  public function update($params)
  {
    $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $db->prepare("UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id");
    $stmt->bindParam(':nome', $params->name);
    $stmt->bindParam(':email', $params->email);
    $stmt->bindParam(':id', $params->id);
    $stmt->execute();

    header("Location: /contact");
  }

  public function create()
  {
    Controller::view("usuarios/contactCreate");
  }
}
