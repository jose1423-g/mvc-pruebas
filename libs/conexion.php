<?php 

    require_once (__DIR__.'/../config/config.php');

    class conexion {

    public static function conect(){ 
        
            $link  = mysqli_connect(host, user, password, db);
            if (!$link) {
                die('Error conection'. mysqli_connect_error() . mysqli_connect_errno());
            }else{
                //return $link;
                //echo 'Conectada con Exito  '. mysqli_get_host_info($link);
            }

            return $link;
        }
   
    }
    
















?>