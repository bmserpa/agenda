<?php
	mysql_connect("localhost","root","vertrigo");
	mysql_select_db("agenda");

	$busca = $_GET['busca'];

	if($busca != "") {
		$sql = "SELECT * FROM usuario WHERE nome LIKE '%$busca%' ORDER BY nome ASC ";
		$query = mysql_query($sql);

		//variavel para zebrar as linhas
		$cont = 0;
		while($row = mysql_fetch_object($query)) {
			//faz a diferenciação das cores para as linhas dos resultados
			if($cont %2 ==0) {
				$cor = "#EDEDED";
			} else {
				$cor = "#FFFFFF";
			}
			echo "<div style='background:$cor'>";
			echo $row->nome."<br>";
			echo $row->email."<br>";
			echo $row->telefone."<br>";
			echo "</div>";
			$cont ++;
		}
	}
?>
