
    <?php
        $db_host = "localhost";
        $db_name = "agenda";
        $db_user = "root";
        $db_password = "canelo";
    
      $connection = mysqli_connect('localhost', 'root', '');
    
     mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
    @mysqli_query("SET NAMES 'utf8'");

    $sql_query = "SELECT * FROM contactos";
    $result = mysqli_query($connection, $sql_query);
    $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>