
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
    $stmt = $conn->prepare("UPDATE cliente SET userc=:user, emailc=:email, senha=:senha, endereco=:endereco, cpfc=:cpf where id=:id;") ;
    $stmt->bindParam(':user', $_POST['userc']);
    $stmt->bindParam(':email', $_POST['emailc']);
    $stmt->bindParam(':senha', $_POST['senha']);
    $stmt->bindParam(':endereco', $_POST['endereco']);
    $stmt->bindParam(':cpf', $_POST['cpfc']);
    

    
    $stmt->execute();

    echo "Usuario alterado com successo";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
