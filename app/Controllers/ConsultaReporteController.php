<?php
        session_start();
        if($_POST['Consultar']=='Send'){
            $idSolicitud=$_POST["CorreoInst"];
            $Fecha = "SELECT Fecha FROM SolicitudReporte
            WHERE idSolicitud = '$idSolicitud' ";
            $Tipo_Dano= "SELECT Tipo_Solicitud FROM SolicitudReporte
            WHERE idSolicitud = '$idSolicitud' ";
            
            include '../Models/Consultar.php';
            $rob=new consul();
            $iniciar=$rob->Consultar($idSolicitud,$Fecha, $Tipo_Dano);
            if(sizeof($iniciar)>0){
                foreach ($iniciar as $key => $valueus) {
                    $idSolicitud['numero']=$idSolicitud;
                    $Fecha = $Fecha;
                    $Tipo_Dano = $Tipo_Dano;

                }
                if ($CorreoInst=!'marisol@utp.ac.pa'){
                header("location:../Views/Home/index.php");
                }
                else{
                    header("location:../../Views/Secretarias/ConsultarSolicitud.php"); 
                }
            }else{
                $resp= '<b><font color=red>Contraseña  o usuario Incorrecta</font></b>';
                
            }
            
        }
?>