<?php

// Meto la información para acceder a la base de datos

$servidor="mysql:dbname=bee;host=127.0.0.1";
$usuario="root";
$password="";

// Si no hay ningún error, conecta a la base de datos

try{
    $pdo= new PDO($servidor,$usuario, $password);
    echo "Conectado...";

// Si hay un error de conexión con la BBDD nos dice cuál es

}catch(PDOException $e){
    echo "Conexión mala".$e->getMessage();
}

?>