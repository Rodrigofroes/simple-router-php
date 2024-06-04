<?php 

namespace app\controllers;

use app\controllers\Controller;
use PDO;

class AuthController{
    public function login(){
        // $msg = "Usuário ou senha inválidos";
        Controller::view("login/login");
    }
    
    public function auth($params){
        $db = new PDO('mysql:host=localhost;dbname=api', 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $db->prepare("SELECT * FROM auth WHERE usuario = :usuario AND senha = :senha");
        $stmt->bindParam(':usuario', $params->usuario);
        $stmt->bindParam(':senha', $params->senha);
        $stmt->execute();
        $usuario = $stmt->fetch();

        if($usuario){
            $_SESSION['user'] = $usuario;
            header("Location: /");
        }else{
            $msg = "Usuário ou senha inválidos";
            Controller::view("login/login", ["msg" => $msg] );
        }
    }
}
?>