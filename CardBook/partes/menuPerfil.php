<ul class="menuPerfil">
			<li><a href="myProfile.php">Coleção</a></li>
			<?php if ($_SESSION["tipo"]>=8){ echo "<li><a href='adm.php'>Administrativo</a></li>";}?>
			<?php if ($_SESSION["tipo"]<=7 && $_SESSION["tipo"]>1){ echo "<li><a href='sugestoes.php'>Sugestões</a></li>";}?>
			<li><a href="notificacoes.php">Notificações</a></li>
</ul>
