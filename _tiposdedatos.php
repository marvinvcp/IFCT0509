<?php include '_header.php' ?>
<?php $texto = "la rapida liebre marron  se llama sky" ?>
<div class="well">cadenas de texto</div>


<div class = "row">
		<div class= "col-ssx 6"> 
		<strong >minuscula: </strong> <?php echo strtolower($texto) ?> <br>
		<strong >mayuscula: </strong> <?php echo strtolower($texto) ?> <br>
		<strong >1ª mayuscula: </strong> <?php echo ucfirst($texto) ?> <br>
		<strong >1ª mayuscula: </strong> <?php echo ucwords($texto) ?> <br>
		<strong >longitud: </strong> <?php echo strlen ($texto) ?> 
		<strong >remplazar: </strong> <?php echo str_replace("silvia","maria",$texto) ?> <br>
		</div>
</div>

<? include '_footer.php' ?>