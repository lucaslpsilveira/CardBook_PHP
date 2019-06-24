
                    <input type='hidden' name='idAmz' value='".$amigos[0]."' />
                    <input type='submit' name='aceitarAmigo' value='Aceitar Amigo' />
                </form>

                <form name='btn-recusa-card' id='btn-recusa-card' method='post' action='notificacoes.php' >
                    <input type='hidden' name='idAmz' value='".$amigos[0]."' />
                    <input type='submit' name='recusarAmigo' value='Recusar Amigo' />
                </form>
            </div>";
            }
    }

    function aceitaAmigo($_idAmz){
        include 'conexao.php';  
                $result = $db->prepare('update amizades set amizade_Status=1 where idamizades = :idAmz');
                $result->execute(array(':idAmz'=>$_idAmz));
            
                if($result==true){
      