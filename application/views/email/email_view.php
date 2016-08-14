<h1>Mensaje de contacto</h1>

<p>
	<strong>Nombre:</strong><br>
	<?php echo $nombre ?>
</p>

<p>
	<strong>Tel&eacute;fono:</strong><br>
	<?php echo $telefono ?>
</p>

<p>
	<strong>Direcci&oacute;n:</strong><br>
	<?php echo $direccion ?>
</p>

<?php 
	if($productos > 0):
?>

<p><strong>Producto que deseas cotizar:</strong></p>

<ul>
	<?php
		if(isset($canceles)){
	?>
	<li>Canceles</li>
	<?php
		}
	?>
	<?php
		if(isset($barandales)){
	?>
	<li>Barandales</li>
	<?php
		}
	?>
	<?php
		if(isset($puertas)){
	?>
	<li>Puertas</li>
	<?php
		}
	?>
	<?php
		if(isset($espejos)){
	?>
	<li>Espejos</li>
	<?php
		}
	?>
	<?php
		if(isset($accesorios)){
	?>
	<li>Accesorios</li>
	<?php
		}
	?>
</ul>

<?php 
	endif;
?>

<p>
	<strong>Te gustaría una cita para toma de medidas:</strong><br>
	<?php echo $cita_medidas ?>
</p>