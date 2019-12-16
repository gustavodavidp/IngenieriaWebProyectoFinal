<?php
        session_start();
            
            include '../Models/Consultar.php';
            function index(){
                $docente = new SolicitudModel();
                $datos = $docente->listar();
                require_once("../Views/Secretarias/ConsultarSolicitud.php");
             }
             require_once("../Views/Secretarias/ConsultarSolicitud.php");
?>