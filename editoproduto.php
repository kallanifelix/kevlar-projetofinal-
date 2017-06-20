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
		$stmt = $conn->prepare("SELECT * FROM produto WHERE id=:id;");
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
			<form action="editp.php" method="POST";>
			<input type="hidden" name="id" value="<?php echo $result['id']; ?>">
			<div id="nome">Nome Produto:</div> <input type="text" name="nome" value="<?php echo $result['nomep']; ?>">
			<div id="descricao">Descrição:</div> <input type="text" name="email"value="<?php echo $result['descp']; ?>">
            <div id="valoruni">Valor Unitario:</div> <input type="text" name="valoruni" value="<?php echo $result['valoruni']; ?>">
            <div id="quantip">Quantidade Disponível:</div> <input type="text" name="quantip"value="<?php echo $result['quantip']; ?>">
			<input type="submit" value="alterar">
			</form>
		</div>
		</body>
</html>