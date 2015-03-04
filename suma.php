<?php include '_header.php' ?>
		<div class="well ">suma</div>
		<?php 
			$a = $_POST ["numero_1"];
			$b = $_POST ["numero_2"];

		?>

	<!--	PHP DENTRO DE HTML-->
			<p> La suma de los dos numeros es = <?php echo $a + $b; ?> </p>
	<!--	PHP DENTRO DE HTML-->
		<?php  echo "<p> la suma de los numeros es =  " . $a + $b . "</p>" ?>

	<!-- Mi primer condcional -->
	<?php 
		if ($a < $b) echo "$a es menor que $b ";
	?>
	

<?php include '_footer.php' ?>