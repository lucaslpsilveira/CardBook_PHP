<div id='BodyTop'>
	<a id="banner" style="background:#fff url('img/TCG.jpg') no-repeat center center"></a>
</div>
<div id='BodyHeader' class='headerfixedHeight'><!-- Div que contem todo menu -->
	<div id='CentroMenu'><!-- Para centralizar o menu -->
	<div id='NavigationArea'><!-- Botões menu -->
		<ul class='navigationElements'>
			<li><a href="index.php" >Home</a></li>
			<li><a href="users.php" >Usuarios</a></li>
			<li><a href="cards.php" >Cards</a></li>
			<?php
				if(!empty($_SESSION["idUsuario"]) && !empty($_SESSION["nome"]) && !empty($_SESSION["tipo"])){
    				echo "<li><a href='myProfile.php'>Perfil</a></li>";
    			}
			?>
		<ul>
	</div>
	<form method="get" action="search.php" id="search">
		<input type="text" name="busca" maxlength="32" placeholder="Buscar">
	</form>
	</div>
</div>