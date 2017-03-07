<?php
$db_host = "am1shyeyqbxzy8gc.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "qhaeazcb6wwlk4sp";
$db_user = "clhe96chq18u2mta";
$db_password = "	
qzy3poja81uxy1hq";
$connection = mysqli_connect($db_host, $db_user, $db_password) or die("Connection Error: " . mysqli_error());
mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
@mysqli_query("SET NAMES 'utf8'");

if(isset($_POST["id_contacto"])){

$id_contacto = $_POST["id_contacto"];
$sql_query = "SELECT * FROM contactos WHERE id_contacto=$id_contacto;";
$result = mysqli_query($sql_query);
$rows = array();
while($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
print json_encode($rows);
}else
echo "No existe el contacto";
mysqli_close($connection);
?>