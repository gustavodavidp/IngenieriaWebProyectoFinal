<?php
 //configuramos timezone vease http://php.net/manual/en/timezones.php
 date_default_timezone_set('America/Bogota');
  
 //definimos ruta y titulo del sitio
 define('URL_VIEW','http://localhost:8001');
 define('TITLE_WEB','Sistema SAREDA');
 define('URL_WEB','http://localhost:8001/');
 define('NOMBRE_WEB','Sareda');
 
 //definimos url de inicios
 $Extencion = substr(strrchr(__FILE__, '.'), 1);
 //Conexion a la bases de datos
 require_once('classConexion/conexion.' . $Extencion);
 require_once('funciones/usuario.' . $Extencion);
 //instaciamos User() para utilizarlo en el sitio
 $_usuario = User();
?>