<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

// Conectando no Banco de dados

try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexão estabelecida com sucesso!";
    
    $sql = "SELECT * FROM posts";
    $dado = $pdo->query($sql);
    
    if($dado->rowCount() > 0) 
    {
        echo "<h3>Há posts cadastrados</h3>";
    }
    else
    {
        echo "<h3>Não há posts cadastrados</h3>";
    }
}
catch(PDOExcption $e)
{
    echo "<h2>Falhou: ".$e->getMessage()."</h2>";
}