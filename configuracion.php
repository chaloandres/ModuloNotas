<?PHP

/***************************************************************************
 *
 * Archivo de configuracion: Datos Host o servidor y base de datos MySQL
 *
 ***************************************************************************/
$server 	= 'localhost';			   // Direcci�n del servidor
$user 		= 'usuario';				   // Nombre del Usuario (User) de la base de datos
$pass 		= 'password';			   // Contrase�a (Password) del usuario de la base de datos

$bd = mysql_connect($server, $user, $pass);
mysql_select_db("dokeos_main", $bd);
		

?>