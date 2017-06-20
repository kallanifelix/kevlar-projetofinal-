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
    $stmt = $conn->prepare("UPDATE produto SET nomep=:nome, descp=:descricao, valoruni=:valoruni, quantip=:quantip, cpfc=:cpf where id=:id;") ;
    $stmt->bindParam(':nome', $_POST['quantip']);
    $stmt->bindParam(':descricao', $_POST['descp']);
    $stmt->bindParam(':valoruni', $_POST['valoruni']);
    $stmt->bindParam(':quantip', $_POST['quantip']);

    
    $stmt->execute();

    echo "Usuario alterado com successo";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
