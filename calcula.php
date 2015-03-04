<?php include '_header.php' ?>
		<div class="well ">calcula</div>
		
		<?php 
			$a=$_POST ["numeroa"];

			$b=$_POST ["numerob"];

		?>


		<?php 

			if ($_POST["suma"]) echo"la suma de a+b" $a+$b;

		?>

		<?php 

			if ($_POST["resta"]) echo"la resta de a-b" $a-$b; 

		?>

		<?php 

			if ($_POST["multiplicacion"]) echo"la multiplicacion de a*b" $a*$b;

		?>

		<?php 

			if ($_POST["division"]) echo "la division de a/b" $a/$b; 

		?>

<?php include '_footer.php' ?>