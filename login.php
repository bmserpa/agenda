



<?php
require_once 'bancodedados.php';
require_once 'agendaDAO.php';


$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');
$senha = md5($_POST['senha']);
$bd = new BancoDeDados();
$agendaDAO = new agendaDAO($bd);
$result = $agendaDAO->fazLogin($login, $senha);

if($result == NULL){
    echo "Login ou Senha incorretos, verifique se tem algum erro";
}
else {
     session_start();
     $_SESSION['login'] = $login;
     $_SESSION['senha'] = $senha;

                   header("Location:listacontatos.php");
                   setcookie("login",$login);

}



?>
