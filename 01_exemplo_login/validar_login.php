<?php
 
$email = $_POST['email'];
$senha = $_POST['senha'];
 
if($email == "adm@senac.com.br" && $senha == "123456"){
    header("Location: tela-administrativo.php");
}else{
    //echo "bloqueado";
    header("Location: formulario.php?mensagem=erro");
}
 
?>