<?php
//Crea una variable superglobal de sesión que va a recordar que tú ya has accededido a ese ordenador, y sólo borra la variable cuando se da a 'Desconectar'
//El servidor identifica al usuario por una cookie que se le manda
//Esto hay que hacerlo al principio del programa
session_start();

?>

<form>
	<!-- Formulario de acceso a mi aplicación -->
	<h2>ACCESO A LA APLICACIÓN</h2>
	<h3>Introduce tus credenciales para acceder</h3>
	<input style="width:400px;" name="username" placeholder="Introduce tu nombre de usuario autofocus"/>
	<input style="width:400px;" name="password" placeholder="Introduce tu contraseña" type="password"/>
	<!-- <input type="submit" value="Acceder"> -->
	<button>Acceder</button>
</form>

<?php

/* Comprobación de que hay un nombre de usuario y una contraseña introducida y que el nombre es david y la contraseña hola*/
if (isset ($_GET['username']) and isset ($_GET['password']) and $_GET['username']=='david' and $_GET['password']=='hola'){
	
	echo 'Hola '. $_GET['username'].', tienes acceso '; //Si hay credenciales y coinciden
	$_SESSION['username']='david';
	echo '<a href="?exit=1">Cerrar</a>';
}
else{
	echo 'Acceso no autorizado, introduce tus credenciales'; //Si o no hay credenciales o no coinciden
	unset($SESSSION);
	session_destroy();
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

?>
