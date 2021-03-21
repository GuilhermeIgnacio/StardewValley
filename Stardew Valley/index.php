<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="Estilo Stardew Valley.css">
	<title>Calcular quantidade de feno para os animais</title>
</head>
<body>
<form action="index.php" method="get">
Número de animais:<input type="text" name="animais"> 
	<input type="submit">
</form>

<?php 
//Número de Animais
$Animais = @$_GET['animais'];


echo "Número necessário de fenos para passar a estação: ", $Animais*28;







?>

</body>
</html>