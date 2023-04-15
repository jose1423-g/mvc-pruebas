<?php 

require_once (__DIR__.'/../libs/conexion.php');

class indexModel{

    private $link;

    function __construct(){
        $this->link = new conexion;
        $this->link = $this->link->conect();
    }

    function index(){
        $qry = "SELECT * FROM contenido_index";
        $pre =  mysqli_prepare($this->link, $qry);
        $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
    }

    function aside_menu(){
        $qry = "SELECT href, texto FROM menu";
        $pre =  mysqli_prepare($this->link, $qry);
        $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
    }
    

   /*  function consulta($dato){
        $qry = "SELECT Titulo, Que_es, Como_se, Para_que, sub_para_que  FROM contenido WHERE Titulo LIKE '%$dato%'";
        $pre =  mysqli_prepare($this->link, $qry);
        $pre->execute();
            $resp = $pre->get_result();

            $data = array();

            while ($obj = $resp->fetch_object()) {
                array_push($data, $obj);
            }
            return $data;
    } */

}
?>