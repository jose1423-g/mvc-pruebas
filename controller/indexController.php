<?php 
    
    require_once(__DIR__.'/../model/indexModel.php');
    
    class indexController{

    public $obj;
    public $dato;

        function __construct(){
            $this->obj = new indexModel;
        }

        function index(){
            $data = $this->obj->index();
            return $data;        
        }

        function menu(){
            $data = $this->obj->aside_menu();
            return $data;
        }

        /* function pregunta($dato){
            $data = $this->obj->consulta($dato);
            return $data;        
        }    */     

    }    

?>