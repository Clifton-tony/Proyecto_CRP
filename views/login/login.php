<?php include "../_include/header_login.php" ?>
	<div class="hijo">
		<div class="logo">
			<img src="../../assets/img/logo.png">
		</div>
		<form action="../../models/validacion_login.php" method="POST">
			<input type="text" name="usuario"	placeholder="usuario">
			<input type="password" name="password"	placeholder="password">
			<button class="boton" type="submit">botonaso</button>
		</form>
	</div>
<?php include "../_include/footer_login.php" ?>