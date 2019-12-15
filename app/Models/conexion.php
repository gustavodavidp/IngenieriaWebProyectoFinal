<?php

class conexion {
     public function con(){
        $link= mysqli_connect("mysql", "root","clave123", "SecretariaAdministrativa");
        return $link;
}
}