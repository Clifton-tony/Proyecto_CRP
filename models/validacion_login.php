 <?php 
	include 'conexion.php';

	if (isset($_POST['btnLogin'])) {


	$usuario = mysqli_real_escape_string($conexion,$_POST['usuario']);
	$contrasena = mysqli_real_escape_string($conexion,$_POST['password']);

	$query = "SELECT * FROM usuarios WHERE usuario = '".$usuario."' and pass = '".$contrasena."' LIMIT 1";
	$result = mysqli_query($conexion,$query);

	if ($result) {
		$var = mysqli_num_rows($result);
		if ($var > 0) {
			while ( $row = mysqli_fetch_array($result) ) {
				$url = '../views/home/home.php';
				header('Location:'.$url);
			}
		}else{
			$url = '../views/login/login.php';
			header('Location:'.$url);
		}
		
	}else {
		$url = '../views/login/login.php';
		header('Location:'.$url);
	}
}
?>