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

	$select = $conn->query("SELECT id, nomep, descp, valoruni, quantip FROM produto");
 
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
				<th> Descrição </th>
				<th> Valor Unitario</th>
                <th> Quantidade Disponível </th>
            
				
				
			</tr>
			<?php foreach($result as $row)
				{
				?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nomep']; ?></td>
				<td><?php echo $row['descp']; ?></td>
				<td><?php echo $row['valoruni']; ?></td>
                <td><?php echo $row['quantip']; ?></td>
				<td><?php echo'<a href="deletprod.php?id='.$row['id'].'"><i class="material-icons">&#xE872;</i></a>';?></td>
				<td><?php echo'<a href="editoproduto.php?id='.$row['id'].'"><i class="material-icons">&#xE254;</i></a>';?></td>
			</tr>
		<?php } ?>
		</table>
            </div>
           
        </section>	
        <section class="scetionq">
            
	<form name="incluir" action="inserir_produto.php" method="POST" enctype = "multipart/form-data">
		<h1>Inclusão de Produtos</h1>
		Nome do produto <input type="text" name="nomep" size=40 maxlength=80><br>
		Valor do produto <input type="text" name="valoruni" size=40 maxlength=80><br>
		Quantidade de produto <input type="text" name="quantip" size=40 maxlength=80><br>
		Desc<textarea name="descp" rows="3" cols="15"></textarea><br>
        Categoria <input type ="text" name="categoria" size="10" max length="20">
		Foto: <input type = "file" name = "foto_prod" id = "foto"> <br>
		<input type="submit" value="incluir">
	</form>

            
            </section>
    </main>
		<footer>
			<p align="center">KEVLAR ₢2017 </p>
		</footer>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>