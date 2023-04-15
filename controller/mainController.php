<?php 
    
    require_once(__DIR__.'/../model/mainModel.php');
    
    class mainController{

        public $obj;
        public $dato;

        function __construct(){
            $this->obj = new mainModel;
        }

        function main(){
            $data = $this->obj->lluvia();
            return $data;
        }

        function preguntas(){
            $data = $this->obj->preguntas();
            return $data;
        }     
        
        function lluvia_de_ideas(){
            $data = $this->obj->lluvia();
            return $data;        
        } 
    }    

?>