<?php include 'conexion.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Te Amo.</title>
</head>
	<body>
		<a href="">Galer&iacute;a</a>
		<a href=""></a>
		<a href=""></a>
	</body>

	<?php 

	if (isset($_GET['vale'])) {
		echo 'alert:"Segura que quiere usar este Vale?"';
	}


	$sql= mysqli_query($conexion, "SELECT * FROM Test");

	while ($res= mysqli_fetch_assoc($sql)) {
		echo '<content><h1>'.$res["Nombre"].'</h1><p>'.$res['Descripcion'].'</p>';

		echo '<a href="http://scmdeveloper.com/Paula?vale='.$res['ID'].'">Usar Vale</a>';
		echo '</content>';
	}

	?>
</html>