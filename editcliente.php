<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kevlar";
 try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // forma 1
		$stmt = $conn->prepare("SELECT * FROM cliente WHERE id=:id;");
		$stmt->bindParam(':id', $_GET['id']);
		$stmt->execute();
		$result = $stmt->fetch();
    }
catch(PDOException $e)
    {
    echo "Opss... Erro no servidor: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<div id="form">
			<h1> Editar Informações </h1>
			<form action="edit.php" method="POST";>
			<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			<div id="user">User:</div> <input type="text" name="user" value="<?php echo $result['userc']; ?>">
			<div id="e-mail">Email:</div> <input type="text" name="email"value="<?php echo $result['emailc']; ?>">
            <div id="senha">Senha:</div> <input type="text" name="senha"value="<?php echo $result['senha']; ?>">
            <div id="endereco">Endereço:</div> <input type="text" name="endereco"value="<?php echo $result['endereco']; ?>">
            <div id="cpf">CPF:</div> <input type="text" name="cpf "value="<?php echo $result['cpfc']; ?>">
			<input type="submit" value="alterar">
			</form>
		</div>
		</body>
</html>