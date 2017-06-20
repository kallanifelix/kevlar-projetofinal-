<?php
	session_start();
	include 'verifica-session.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
        <title> KEVLAR </title>
        <?php $conn=mysqli_connect("localhost","root","","kevlar") or die ("A conexão com o servidor não foi executada com sucesso"); ?>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="js/slide.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
		
	</head>
	<body>
        <header>
            <h2 class="logoheader">KEVLAR</h2>
            <a href="adm.php">Sair</a>
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
            <section>
                <div class="slideshow-container">
			     <div class="mySlides fade"  style="display:block;" >
				    <div class="numbertext">1 / 3</div>
				    <img src="img/kevlar2.png">
				    <div class="text">  </div>
			     </div>
			     <div class="mySlides fade">
				    <div class="numbertext">2 / 3</div>
				    <img src="img/1.jpg">
				    <div class="text"></div>
			     </div>
                 <div class="mySlides fade">
				    <div class="numbertext">3 / 3</div>
				    <img src="img/kevlar3.png" >
				    <div class="text"></div>
			     </div>
			     <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			     <a class="next" onclick="plusSlides(1)">&#10095;</a>
			 </div>
             <div style="text-align:center">
			     <span class="dot" onclick="currentSlide(1)"></span> 
			     <span class="dot" onclick="currentSlide(2)"></span> 
			     <span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</section>
        <section class ="SectionQ">
            <div id="home" class="section_info">
                <h2 class="header">PRODUTOS</h2>
                <div class="hoverzoom">


                    <img src="produtos/dogtag2.jpg" class ="imgq">
                        <div class="retina">
                            <p>Acessórios</p> <br>
                            <a href="produtos-acessorios.html">Saiba mais</a>
                        </div>
                </div>
                <div class="hoverzoom">
                    <img src="produtos/jaqueta1.jpg" class ="imgq">
                        <div class="retina">
                            <p>Roupas</p> <br>
                            <a href="produtos-roupas.html">Saiba mais</a>
                        </div>
                </div>
                <div class="hoverzoom">
                    <img src="produtos/karambit-3.jpg" class ="imgq">
                        <div class="retina">
                            <p>Armas Brancas</p> <br>
                            <a href="produtos-armas-brancas.html">Saiba mais</a>
                        </div>
                </div>	
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