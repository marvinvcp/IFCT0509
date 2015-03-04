
<?php 
	if(isset($_POST["submit"])) {


			$a = $_POST["a"];
			$b = $_POST["b"];
}
	if(isset($_POST["borrar"])) {
			$a=0;
			$$b=0;

}	
	if(isset($_POST["coseno"])){
		$a= $_POST["a"];
		$resultado ="el resultado es;". cos($a);
	}

?>

<?php include '_header.php' ?>
	<div class= "well">calculator</div>
		

		<form action="calculator.php" method="post">
			

			<input type="number" name="a" value="<?php echo $a; ?>"  />
			<input type="number" name="b" value="<?php echo $b; ?>" />
			<input type="submit" name="submit" />
			
			<input type="submit" name="coseno" value="el coseno es" />
			<input type="submit" name="borrar" value="Borrar number">
		

		<h4> <?php echo "la suma es" .  ($a+$b) ; ?>  <h4>
		<h4> <?php echo $resultado ?>  <h4>
		</form>
<div class="well">

	<div calss="row">

		<input type="button" value=" X "/>&nbsp
		<input type="button" value=" Y "/>&nbsp
		<input type="button" value=" % "/>&nbsp
		<input type="button" value=" i "/>&nbsp
	
	</div>

	<br>

	<div class="row">

		<input type= "button" value= " 1 " />&nbsp
		<input type= "button" value= " 2 " />&nbsp
		<input type= "button" value= " 3 " />&nbsp
		<input type= "button" value= " / " />&nbsp

	</div>	

	<div calss="row">

		<input type= "button" value= " 4 " />&nbsp
		<input type= "button" value= " 5 " />&nbsp
		<input type= "button" value= " 6 " />&nbsp
		<input type= "button" value= " x " />&nbsp

	</div>

	<br>

	<div calss="row">

		<input type= "button" value= " 7 " />&nbsp
		<input type= "button" value= " 8 " />&nbsp
		<input type= "button" value= " 9 " />&nbsp
		<input type= "button" value= " - " />&nbsp

	</div>

	<br>

	<div calss="row">

		<input type= "button" value= " 0 " />&nbsp
		<input type= "button" value= " = " />&nbsp
		<input type= "button" value= " . " />&nbsp
		<input type= "button" value= " + " />&nbsp

	</div>

	<br>

</div>
	



<?php include '_footer.php' ?>