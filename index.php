
<?php




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

<div id="imagens"style="position: relative; overflow: visible;">

           <ul>

             <div class="slider-item">

           						<p>Acesse o site do campus</p>
              <a href="http://www.restinga.ifrs.edu.br/" target="_parent"> <img src="img/img1.jpg" alt="" title="" width="500" height="300" class="first"/></a>

             </div>

             <div class="slider-item">

                       <p>Acesse o moodle</p>

              <a href="https://moodle.restinga.ifrs.edu.br/" target="_parent"> <img src="img/img2.jpg" alt="" title="" width="500" height="300" class="second"/></a>

            </div>

           </ul>

</div>


</body>

</html>
