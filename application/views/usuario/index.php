
<!--Aqui estara el crud del usuario-->
	<h1>FORMULARIO DE REGISTRO</h1>

<form method="post"	action="<?php echo base_url('usuario/insert')?>">
	<div class="form-group">
		<label for="exampleInputEmail1">Perfil</label>
		<select name="txtIdper" class="form-control">
			<?php foreach ($selPerfil as $value){?>
			<option value="<?php echo $value->per_id?>"> <?php	echo $value->per_nombre;?>   </option>

			<?php } ?>




		</select>
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Nombre</label>
		<input type="text" name="txtNombres" id="exampleInputEmail1" placeholder="nombres">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Apellidos</label>
		<input type="text" name="txtApellidos" id="exampleInputEmail1" placeholder="Apellidos">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Correo Eletronico</label>
		<input type="text" name="txtCorreo" id="exampleInputEmail1" placeholder="Email">
	</div>

	<div class="form-group">
		<label for="exampleInputEmail1">Telefono</label>
		<input type="number" name="txtTelefono"  id="exampleInputEmail1" placeholder="Telefono">
	</div>



	<button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
print_r($selPerfil);
?>
