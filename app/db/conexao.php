<?php 
namespace app\db;
use PDO;
function conexao(){
    return new PDO('mysql:host=localhost;dbname=api', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}