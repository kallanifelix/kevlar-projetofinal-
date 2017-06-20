
	<form name="incluir" action="inserir_produto.php" method="POST" enctype = "multipart/form-data">
		<h1>Inclusão de Produtos</h1>
		Nome do produto <input type="text" name="nomep" size=40 maxlength=80><br>
		Valor do produto <input type="text" name="valoruni" size=40 maxlength=80><br>
		Quantidade de produto <input type="text" name="quantip" size=40 maxlength=80><br>
		Desc<textarea name="descp" rows="3" cols="15"></textarea><br>
		Foto: <input type = "file" name = "foto_prod" id = "foto"> <br>
		<input type="submit" value="incluir">
	</form>
