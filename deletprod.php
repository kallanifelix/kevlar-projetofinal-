<?php
//echo 'olá '.$_POST['nomeuser'];
//echo '<br>';
//echo 'Seu username é '.$_POST['user']

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kevlar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("delete from produto where id=:id");
    $stmt->bindParam(':id',$_GET['id']);

    
    $stmt->execute();

    echo "Produto deletado com sucesso";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }




?>