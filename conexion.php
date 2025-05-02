<?php
define('DB_HOST', $_ENV['MYSQLHOST']);
define('DB_USER', $_ENV['MYSQLUSER']);
define('DB_PASS', $_ENV['MYSQLPASSWORD']);
define('DB_NAME', $_ENV['MYSQLDATABASE']);
define('DB_PORT', $_ENV['MYSQLPORT']);

echo DB_HOST;
echo DB_USER;
echo DB_PASS;
echo DB_NAME;
echo DB_PORT;
    
$conexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
if($conexion->connect_errno){
    echo "El sitio web no se pudo conectar a la base de datos";
}
?>
