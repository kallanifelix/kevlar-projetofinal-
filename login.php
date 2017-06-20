<?php
	session_start();
/*verifica se tem alguem logado*/
if(isset($_POST['usuario'])){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "kevlar";
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$stmt = $conn->prepare("SELECT * FROM cliente where userc = :user"); /*nomeDoBanco = :TalCoisaParaAncora*/
			$stmt->bindParam(':user', $_POST['usuario']);
			$stmt->execute();
			
			$result = $stmt->fetch();
		}
		catch(PDOException $e)
		{
		echo "Opss... Erro no servidor: " . $e->getMessage();
		}
		if($_POST['senha'] == $result['senha']){
			$_SESSION['nome'] = $result['nomec'];
			$_SESSION['email'] = $result['emailc'];
			header('Location: index.php');
		} else{
			$erro = 'Usuário ou senha inválidos';
            
		}
	} ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="js/jquery-3.1.1.min.js"></script>
    
</head>
<body>
    <div id="form-container">
        <div class="panel" id="form-box">
            <form action="adm.php" method="post" id="form-login">
				
                <h1 class="text-center">Login</h1>
                
                <h4 class="msge"> <?php if(isset($erro)){ echo $erro; } ?> </h4>

                <div class="form-group">
                    <label class="sr-only" for="login">Usuário</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                           <i class="material-icons">&#xE416;</i>
                        </div>
                        <input type="text" name="usuario" class="form-control" placeholder="Seu login de usuário" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="sr-only" for="senha" >Senha</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="material-icons">&#xE899;</i>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Entrar" class="btn btn-success form-control">
                </div>

                
            </form>
        </div>
    </div>
</body>
</html>