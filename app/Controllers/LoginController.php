<?php
        session_start();
        if($_POST['Iniciar']=='Login'){
            $CorreoInst=$_POST["CorreoInst"];
            $Contraseña=$_POST["Contraseña"];
            
            include '../Models/consul.php';
            $rob=new consul();
            $iniciar=$rob->login($CorreoInst,$Contraseña);
            if(sizeof($iniciar)>0){
                foreach ($iniciar as $key => $valueus) {
                    $_SESSION['usu']=$valueus[1];
                }
                if ($CorreoInst=!'marisol@utp.ac.pa'){
                header("location:../Views/Home/index.php");
                }
                else{
                    header("location:../../Views/Secretarias/index.php"); 
                }
            }else{
                $resp= '<b><font color=red>Contraseña  o usuario Incorrecta</font></b>';
                
            }
            
        }
?>