<?

include "bancodedados.php";


?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login/Sign-In</title>



    <link rel="stylesheet" href="css/estilo.css" media="screen" type="text/css">
    <link rel="stylesheet" href="css/style.css">



    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jcycle.js"></script>





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
             		<form name="signup" method="POST" action="cadastro.php" enctype="multipart/form-data">


    						<h1><center>Começe a usar a agenda!</center></h1>
<br>
             <fieldset>

              <legend>Insira seus dados:</legend>
              <table cellspacing="10">
               <tr>
                <td>
                <div id="cor"> <label for="nome">Nome:</label></div>
                </td>
                <td align="left">
                 <input type="text" name="nome" id="nome">
                </td>

                <tr>
                 <td>
                  <label for="sobrenome">Sobrenome: </label>
                 </td>
                 <td align="left">
                  <input type="text" name="sobrenome" id="sobrenome">
                 </td>
               </tr>

               <tr>
                <td>
                 <label>Data de nascimento: </label>
                </td>
                <td align="left">
                <input type="text" name="data" size="20" maxlength=50 value="dd/mm/aaaa" id="data">

                </td>
               </tr>

              </table>



              <table cellspacing="10">

                <tr>
                 <td>
                  <label for="cep">Cep: </label>
                 </td>
                 <td align="left">
                  <input type="text" name="cep" maxlength="9" id="cep">
                 </td>
               </tr>

               <tr>
                <td>
                 <label for="opcao">Oque você é?: </label>
                </td>
                <td align="left">
                    <select id="opcao" name="opcao">
                      <option value="professor"">professor</option>
                      <option value="aluno"">aluno</option>
                    </select>
                  </td>
               </tr>


               <tr>
                <td>
                 <label for="email">E-mail: </label>
                </td>
                <td align="left">
                 <input type="text" name="email" id="email">
                </td>
              </tr>
               <td>
                <label for="numero">Numero de telefone/Celular: </label>
               </td>
               <td align="left">
                <input type="text" name="telefone">
               </td>
              </tr>
               <tr>
                <td>
                 <label for="imagem">Imagem de perfil:</label>
                </td>
                <td>
                 <input type="file" name="arq" id="arq">

                </td>
               </tr>
               <tr>
                <td>
                 <label for="login">Login de usuário: </label>
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
               <tr>
                <td>
                 <label for="passconfirm">Confirme a senha: </label>
                </td>
                <td align="left">
                 <input type="password" name="passconfirm">
                </td>
               </tr>
              </table>
             </fieldset>
             <br />
    <div id="cssbutcadas" >
    		 <input type="submit" value="Cadastrar" a class="but">
     </div>

     <div id="cssbutlogin" >

     <a href="formlogin.php" a class="but">Fazer Login</a>
     </div>

     <div id="cssbutlimpar" >

       <input type="reset" value="Limpar" a class="but">

     </div>

     <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
     <script type="text/javascript">
     $("input[name='nomeUsuario']").on('blur', function(){
       var nomeUsuario = $(this).val();
       $.get('usuario.php?nomeUsuario=' + nomeUsuario,function(data){
         $('#resultado').html(data);
       });
     });
     </script>
             </form>

             		</div>



    </div>







  </body>
</html>
