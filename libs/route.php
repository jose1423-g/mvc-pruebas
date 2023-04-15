<?php 
    require_once(__DIR__.'/../controller/indexController.php');
    require_once(__DIR__.'/../controller/mainController.php');


    $index = new indexController;
    $main = new mainController;

    $op = $_REQUEST['op'];
    
    if ($op == 'http://localhost/mvc-demo/') {
        $data = $index->menu();
        echo json_encode($data);
        exit();
    } 
?>