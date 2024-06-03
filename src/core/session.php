<?php
class session{
    public function setSession($key,$value){
        return $_SESSION[$key]=$value; 
    }
    public function getSession($key=''){
        if($key=''){
            return $_SESSION;
        }else{
            return $_SESSION[$key];
        }
    }
    public function removeSession($key=''){
        if(empty($key)){
            session_destroy();
            return true;
        }else{
            if(isset($_SESSION[$key])){
                unset($_SESSION[$key]);
                return true;
            }
        }
    }
    
}
?>