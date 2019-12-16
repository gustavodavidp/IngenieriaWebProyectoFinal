<?php
class UserSession{
    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['usu'] = $user;
    }
    public function getCurrentUser(){
        return $_SESSION['usu'];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>