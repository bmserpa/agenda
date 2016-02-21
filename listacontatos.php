<?php

    $login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"Bem-Vindo, $login_cookie    ";
            echo"<br><a href='logout.php'>logout</a>";
        }else{
            echo"Bem-Vindo, convidado <br>";
            echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
            echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
        }






require_once 'bancodedados.php';
require_once 'agendaDAO.php';


?>

<html>

<head>

<link rel="stylesheet" href="css/estilo.css" media="screen" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jcycle.js"></script>

<script type="text/javascript" src="funcs.js"></script>

<script type="text/javascript">

           $('#imagens ul').cycle();

       </script>


       <script>

       //função para pegar o objeto ajax do navegador
       function xmlhttp()
       {
       	// XMLHttpRequest para firefox e outros navegadores
       	if (window.XMLHttpRequest)
       	{
       		return new XMLHttpRequest();
       	}

       	// ActiveXObject para navegadores microsoft
       	var versao = ['Microsoft.XMLHttp', 'Msxml2.XMLHttp', 'Msxml2.XMLHttp.6.0', 'Msxml2.XMLHttp.5.0', 'Msxml2.XMLHttp.4.0', 'Msxml2.XMLHttp.3.0','Msxml2.DOMDocument.3.0'];
       	for (var i = 0; i < versao.length; i++)
       	{
       		try
       		{
       			return new ActiveXObject(versao[i]);
       		}
       		catch(e)
       		{
       			alert("Seu navegador não possui recursos para o uso do AJAX!");
       		}
       	} // fecha for
       	return null;
       } // fecha função xmlhttp

       //função para fazer a requisição da página que efetuará a consulta no DB
       function carregar()
       {
          a = document.getElementById('busca').value;
          ajax = xmlhttp();
          if (ajax)
          {
       	   ajax.open('get','busca.php?busca='+a, true);
       	   ajax.onreadystatechange = trazconteudo;
       	   ajax.send(null);
          }
       }

       //função para incluir o conteúdo na pagina
       function trazconteudo()
       {
       	if (ajax.readyState==4)
       	{
       		if (ajax.status==200)
       		{
       			document.getElementById('resultados').innerHTML = ajax.responseText;
       		}
       	}
       }

       </script>


  <title>Agenda</title>

</head>

<body>

<div class="header">

  <center><h1 id="titulo">Agenda de Contatos</h1></center>

</div>

<div id="content">

<div id="menu">

         <ul class="nav">

              <li><a href="index.php">Inicio</a></li>
              <li><a href="formlogin.php">Login</a></li>
              <li><a href="formcadastro.php">Cadastrar</a></li>


          </ul>

</div>

</div>

<div id="centro">

<h2>Contatos</h2>

<br/>
<br/>

<form id="form1" action="" method="post">
	Busca: <input type="text" name="busca" id="busca" value="" onkeyUp="carregar()"/>
</form>
<p>&nbsp;</p>
Resultado da busca:
<div id="resultados" style="border:1px solid #CCCCCC; width:200px;">

</div>


<table border = '1pt' style=" border-color: white" width="900px" >
          <tr>
              <th>Id</th>
              <th>Nome</th>
              <th>Sobre nome</th>
              <th>Tipo</th>
              <th>Email</th>
              <th>Telefone</th>
              <th></th>

          </tr>
      <?php

          $bd = new BancoDeDados();
          $agendaDAO = new agendaDAO($bd);
          $listaUsuario = $agendaDAO->leUsuario();
          foreach ($listaUsuario as $usuario){
              echo '<tr>';
              echo '<td>'. $usuario->getId()  . '</td>';
              echo '<td>'. $usuario->getNome() . '</td>';
              echo '<td>'. $usuario->getSobrenome() . '</td>';
              echo '<td>'. $usuario->getOpcao() . '</td>';
              echo '<td>'. $usuario->getEmail() . '</td>';
              echo '<td>'. $usuario->getTelefone() . '</td>';
              echo '<td><img src="'. $usuario->getImagem() . '" height="150" width="150"></td>';

              echo '</tr>';
          }
          $bd->fecha();
      ?>



      </table>









</div>
</body>

</html>
