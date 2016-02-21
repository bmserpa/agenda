<?php
    require_once 'bancodedados.php';
    require_once 'agendaDAO.php';
?>


<html>

<head>

<link rel="stylesheet" href="css/estilo.css" media="screen" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jcycle.js"></script>


<script type="text/javascript">

           $('#imagens ul').cycle();

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

<div id="cssCadastro">
            <form method="POST" action="login.php" enctype="multipart/form-data">


            <h1><center>Login</center></h1>
<br>
         <fieldset>

          <legend>Insira seus dados:</legend>
          <table cellspacing="10">
           <tr>
            <td>
             <label for="login">Login </label>
            </td>
            <td align="left">
             <input type="text" name="login" id="login">
            </td>
           </tr>
           <tr>
            <td>
             <label for="pass">Senha: </label>
            </td>
            <td align="left">
             <input type="password" name="senha" id="senha">
            </td>
           </tr>
          </table>
         </fieldset>
         <br />


         <div id="cssbutlogin2" >
              <input type="submit" value="Logar" a class="but">
          </div>





         </form>
            </div>
</div>



</body>

</html>
