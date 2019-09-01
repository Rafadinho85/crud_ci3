<DOCTYPE></DOCTYPE>
<html lang="es">
		<head>
			<title>Formulario de Registro</title>

			<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css')?> ">
			<script src="<?php echo base_url('public/js/bootstrap.js')?>"></script>
		</head>

	<body>
			<header>

			</header>
			<div id="container">
			<!-- Aqui va el ocntenido de las vistas. -->
				<div class="col-md-5">
					<?php
					//para que llame el contenido de las vistas
					$this->load->view($contenido);
					?>
				</div>
			</div>
			<footer>

			</footer>
		</body>
</html>
