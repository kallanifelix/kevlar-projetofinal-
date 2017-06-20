<?php
$nomep= $_POST["nomep"];
$descp= $_POST["descp"];
$valoruni= $_POST["valoruni"];
$quantip= $_POST["quantip"];
$categoria= $_POST["categoria"];


if($_FILES["foto_prod"]["error"]==0)
	{
		$ext = substr($_FILES["foto_prod"]["name"],
			strpos(strrev($_FILES["foto_prod"]["name"]), ".")*-1);
			$foto_prod = md5(time().$_FILES["foto_prod"]["name"]).".".$ext;
			move_uploaded_file($_FILES["foto_prod"]["tmp_name"], "imagens/".$foto_prod);
	} else{
		$foto_prod = "nouser.png";
	}

	$conn=mysqli_connect("localhost","root","","kevlar") or die ("A conexão com o servidor não foi executada com sucesso");

	if ($conn){
		$sql="insert into produto(nomep ,descp, valoruni, quantip, foto_prod,categoria)"."values('$nomep', '$descp' ,'$valoruni' ,'$quantip ','$foto_prod')";
		$rs=mysqli_query($conn,$sql);
		if ($rs){
			echo "<h1 class = 'ca'>Cadastrado com sucesso!</h1>";
		}else{
			echo "erro de inclusão: ".mysqli_error($conn);
		}
	}else{
		echo "erro de conexão: ".mysqli_error($conn);
	}
	
	//mysqli_free_result($rs);
	mysqli_close($conn);
?>