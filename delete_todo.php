<?php
include_once("classes/users.php");
    
    $obj = new Lists;

    if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    //$query = "DELETE FROM todo WHERE id = '$id'";
    
    if($obj->todo_Delete($id)){
        echo 'Todo successfully deleted';
    }
}


    
    

   




?>