::PARAM_STR);
            $stmt->execute();

            if($row = $stmt->fetch(PDO::FETCH_NUM)){
                echo"<li class='i3'>
                        <a href='profile.php?NU=".$row[5]."' title='".$row[1]."' style='color:#404040'>
                            <span class='thumbnail'>
                                <img src='fotosUsuario/".$row[10]."' alt='foto".$row[1]."' width='50' height='50'/>
                            </span>
                        </a>  
                    </li>";
            }
            }
    }

    function qtdAmigos(){
            include 'conexao.php';

            $amz= $db->prepare ('SELECT idUsuario_ac FROM amizades where idUsuario_req = ? and amizade_Status = 1 union
                                SELECT idUsuario_req FROM amizades where idUsuario_ac = ? and amizade_Status = 1');
            $amz->bindValue(1,$this->getId(), PDO::PARAM_STR);
            $amz->bindValue(2,$this->getId(), PDO::PARAM_STR