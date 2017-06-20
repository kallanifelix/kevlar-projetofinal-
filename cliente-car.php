<?php
	session_start();
	include 'verifica-session.php';
?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kevlar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$select = $conn->query("SELECT id, nomec, emailc, endereco, userc, senha, cpfc FROM cliente");
 
	$result = $select->fetchAll();
 
	

}
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <title> KEVLAR </title>
        <?php $conn=mysqli_connect("localhost","root","","kevlar") or die ("A conexão com o servidor não foi executada com sucesso"); ?>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="js/slide.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
	</head>
	<body>
        <header>
            <h2 class="logoheader">KEVLAR</h2>
            <a href="logout.php">Sair</a>
		</header>
		<main>
			<!--MENU-->
            <nav>
            <div class="menu" >
			  <a href="index-adm.php">Home</a>
			  <a href="produto-car.php"> Produtos(C.A.R.) </a>
             <a href ="cliente-car.php"> Clientes(C.A.R.)</a>
			  <!--BARRA DE PESQUISA-->		
			</div>
                </nav>
           
           
        <section class ="SectionQ">
            <div class="sectionedi">
            <table border="0">
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Endereço</th>
                <th> User </th>
                <th> Senha </th>
                <th> CPF </th>
				
				
			</tr>
			<?php foreach($result as $row)
				{
				?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nomec']; ?></td>
				<td><?php echo $row['emailc']; ?></td>
				<td><?php echo $row['endereco']; ?></td>
                <td><?php echo $row['userc']; ?></td>
                <td><?php echo $row['senha']; ?></td>
                <td><?php echo $row['cpfc']; ?></td>
				<td><?php echo'<a href="deletcliente.php?id='.$row['id'].'"><i class="material-icons">&#xE872;</i></a>';?></td>
				<td><?php echo'<a href="editcliente.php?id='.$row['id'].'"><i class="material-icons">&#xE254;</i></a>';?></td>
			</tr>
		<?php } ?>
		</table>
            </div>
           
        </section>
            <section class ="SectionQ">
                <div id="sectionedi">
			<h1>Cadastro de Usuario</h1>
			<form action="cadastra_usuario.php" method="POST";>
			<div id="nome">Nome:</div><input type="text" name="nome"><br><br>
			<div id="user">User:</div> <input type="text" name="user"><br><br>
            <div id="senha">Senha:</div><input type="text" name="senha"><br><br>
			<div id="email">Email:</div> <input type="text" name="email"><br><br>
            <div id="endereco">Endereço:</div><input type="text" name="endereco"><br><br>
            <div id="cpf">CPF:</div><input type="text" name="cpf"><br><br>
			<input type="submit" value="cadastrar">
			</form>
		</div>
            </section>
    </main>
		<footer>
			<p align="center">KEVLAR ₢2017 </p>
		</footer>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>