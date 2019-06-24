<?php 
if(!empty($_POST["lg"])){
	include 'src/Conexao.php';
	$stmt= $db->prepare ('SELECT * FROM user where login = ?');
    $stmt->bindValue(1,$_POST["lg"], PDO::PARAM_STR);
    $stmt->execute();

    if($row = $stmt->fetch(PDO::FETCH_NUM)){
		echo "<span class='red'> Nome de usuario em uso!</span>";	
	}else{
		echo "<span class='green'>Ok!</span>";
	}
}


?>