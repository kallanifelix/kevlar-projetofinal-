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
<html lang="pt-br">
	<head>
        <title> KEVLAR </title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="js/slide.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
         <header>
            <h1 class="logoheader">KEVLAR</h1>
            <a class="cadas" href="cadas.php">Cadastrar</a>
             <a href="login.php"><img src="img/login.png" class="entrar"></a>
            <img src="img/car.png" class ="carrinho">
		</header>
		<main>
			<!--MENU-->
            <nav>
            <div class="menu" >
			  <a href="index.html">Home</a>
                <div class="dropdown">
				    <button class="dropbtn">Produtos</button>
				        <div class="dropdown-content">
				            <a href="produtos-acessorios.html">Acessórios</a>
				            <a href="produtos-armas-brancas.html">Armas Brancas</a>
				            <a href="produtos-roupas.html">Roupas</a>
                        </div>
			     </div> 
			  <a href="contato.html">Contato</a>
             <a href ="sobre.html"> Sobre</a>
			  <!--BARRA DE PESQUISA-->
				<div id="divBusca">
				    <input type="text" id="txtBusca" placeholder="Buscar..."/>
				    <button id="btnBusca"><img class="icon"src="img/buscar.png"></button>
				</div>			
			</div>
            </nav>
           
        <section class ="SectionQ">
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
            

    </main>
		<footer>
			<p align="center">KEVLAR ₢2017 </p>
		</footer>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>