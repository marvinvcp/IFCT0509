<?php $nombre=$POST["nombre"]; ?>

<p>Te llamas <?php echo strtoupper ($nombre) ?> </p>
	
<p>tu nombre tiene
<?php 
$text = ($nombre); 
echo strlen($text)

?> caracteres </p>

<p>Naciste en el año
<?php echo ($año_de_nacimiento=$_POST["ano_de_nacimiento"]); ?>

<?php echo ($ano_de_nacimiento); ?>  </p>

<p><?php echo date ("Y"); 
?></p>
<p> Tienes <?php echo ( (int) date ("Y") - (int)$ano_de_nacimiento) ?> años </p>


<?php include '_footer.php' ?>