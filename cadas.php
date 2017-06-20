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
            <h2 class="logoheader">KEVLAR</h2>
            <a  class="cadas" href="cadas.php">Cadastrar</a>
            <a href="login.php"><img src="img/login.png" class="entrar"></a>
            <img src="img/car.png" class ="carrinho">
		</header>
		<main>
			<!--MENU-->
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
				    <button id="btnBusca"><i class="material-icons">&#xE8B6;</i></button>
				</div>			
			</div>
            <section class ="sectionform">
			<br>
			<br>
			<div id="form-cadastro">
				<h1>Cadastro de Usuario</h1>
				<form action="cadastra_usuario.php" method="POST";>
				<div id="nome">Nome:</div><input type="text" name="nome" required ><br><br>
				<div id="nome">CPF:</div><input type="text" name="cpf" required maxlength="11" ><br><br>
				<div id="nome">User:</div> <input type="text" name="user" required ><br><br>
				<div id="nome">Senha:</div><input type="text" name="senha" required maxlength="8"><br><br>
				<div id="nome">Email:</div> <input type="email" name="email"  required ><br><br>
				<div id="nome">Endereço:</div><input type="text" name="endereco" required ><br><br>
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