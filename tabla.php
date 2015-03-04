<?php include '_header.php' ?>


<div class="row">
	<div class="well" class="col-xs-2">
 	
	<?php for($i=1;$i<=10 ;$i=$i+1){
		echo "".$i."x 1=".($i*1)."<br>";
	}
	?>
	</div>

	<div class="well" class="col-xs-2">

	<?php for($i=1;$i<=10 ;$i=$i+1){
		echo "".$i."x 1=".($i*2)."<br>";
	}
	?>
	</div>

	<div class="well" class="col-xs-2">

	<?php for($i=1;$i<=10 ;$i=$i+1){
		echo "".$i."x 1=".($i*3)."<br>";
	}
	?>
	</div>


<div class="well" class="col-xs-2">

	<?php for($i=1;$i<=10 ;$i=$i+1){
		echo "".$i."x 1=".($i*4)."<br>";
	}
	?>
	</div>

<div class="well" class="col-xs-2">

	<?php for($i=1;$i<=10 ;$i=$i+1){
		echo "".$i."x 1=".($i*5)."<br>";
	}
	?>
	</div>

	</div>
<input type="button" class="submit"></div>

<?php include '_footer.php' ?>