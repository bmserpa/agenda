<html>

<head>
<link rel="stylesheet" href="css/estilo.css" media="screen" type="text/css">
</head>
  <body>

<?php

$upload_dir = 'imgperfil/';

//basename retorna apenas o nome do arquivo do caminho.
$target_file = $upload_dir . basename($_FILES["arq"]["name"]);
echo $target_file.'<br>';

$uploadOk = 1;

if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["arq"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image. <br>";
        $uploadOk = 0;
    }
}



if ($_FILES["arq"]["size"] > 500000) {
    echo "Arquivo muito grande.";
    $uploadOk = 0;
}

//pathinfo  ira retornar as informações referentes ao:
/*
 * Diretorio, nome do arquivo e sua extensão
 */

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Permitido apenas JPG, JPEG, PNG & GIF.";
    $uploadOk = 0;
}

if (is_dir($upload_dir) && is_writable($upload_dir)) {
    echo 'folder ok<br>';
} else {
    echo 'Diretorio não existe ou sem permissao de escrita';
}

if ($uploadOk == 0) {
    echo "Seu arquivo não pode ser carregado.";
} else {
    //move_uploaded_file - move o arquivo (1 parametro) para o diretorio destino (2 parametro).
    if (move_uploaded_file($_FILES["arq"]["tmp_name"], $target_file)) {
        echo "O arquivo ". basename( $_FILES["arq"]["name"]). " foi carregado com sucesso.<br>";
    } else {
        echo "Erro no upload do arquivo.<br>";
    }



$files = scandir($upload_dir);
$total = count($files);
$images = array();
for($x = 0; $x <= $total; $x++){

    }
}



require_once 'bancodedados.php';
require_once 'agendaDAO.php';
require_once 'agendaclass.php';


$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');
$data = filter_input(INPUT_POST, 'data');
$cep = filter_input(INPUT_POST, 'cep');
$opcao = filter_input(INPUT_POST, 'opcao');
$email = filter_input(INPUT_POST, 'email');
$telefone = filter_input(INPUT_POST, 'telefone');
$imagem = $target_file;
$login = filter_input(INPUT_POST, 'login');
$senha = filter_input(INPUT_POST, 'senha');






$data = implode("-",array_reverse(explode("/",$data)));


if ((!$nome) || (!$sobrenome) || (!$email) || (!$login)|| (!$senha)|| (!$data)|| (!$cep)|| (!$imagem)|| (!$opcao)|| (!$telefone)){

   echo "ERRO: <br /><br />";

   if (!$nome){

       echo "Nome é requerido.<br />";

   }

   if (!$sobrenome){

       echo "Sobrenome é requerido.<br /> <br />";

   }

   if (!$email){

       echo "Email é um campo requerido.<br /><br />";

   }

   if (!$login){

       echo "Nome de Usuário é requerido.<br /><br />";

   }

   if (!$imagem){

       echo "Você deve inserir uma imagem.<br /><br />";

   }

   if (!$senha){

       echo "A senha é um campo requerido.<br /><br />";

   }

   if (!$cep){

       echo "O cep é um campo requerido.<br /><br />";

   }

   if (!$opcao){

       echo "Opção é um campo requerido.<br /><br />";

   }

   if (!$data){

       echo "A data é um campo requerido.<br /><br />";

   }

   if (!$telefone){

       echo "O telefone é um campo requerido.<br /><br />";

   }

   echo '<a href="formcadastro.php">Voltar</a> <br /><br />';

   include "formcadastro.php";

}else{

$bd = new BancoDeDados();
$usuario = new Usuario(NULL, $nome, $sobrenome, $data, $cep, $opcao, $email, $telefone, $imagem, $login, $senha);
$agendaDAO = new AgendaDAO($bd);
$insert = $agendaDAO->adicionaUsuario($usuario);

if($insert){
        header('location:index.php');


        


}
else{
    echo '<p>Erro ao cadastrar usuario, por favor tente mais tarde: ' . $bd->getErro() . '.</p>';
}

    $bd->fecha();

  }



?>


</body>

</html>
