
<?php


if(isset($_POST["tarifacine.php"]))	{

	$edad = $_POST["edad"];

			if ($edad < 17 ) { 
				$resultado = "4 euros";
			}

			if($edad < 12 ) { 
				$resultado = "gratis";
			}

			if($edad >= 17 ){
				$resultado = "tarifa adulto 8 euros";
			}

			elseif($edad > 65 )  { 
				$resultado = "4 euros";
			}
									}
 		
?>

<?php include '_header.php' ?>
	<div class= "well">tarifacine</div>
		
		<form action="tarifacine.php" method="post">

			<input type="number" name="numero" placeholder="edad" /><br />
			<input type="submit" name="tarifacine" value="cobrar" />
 			
			
		</form>

		<h3><?php echo $resultado ?><h3>

<?php include '_footer.php' ?>