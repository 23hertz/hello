<?php

include_once("classes/users.php");
    
    $obj = new Users; 
    
    $obj->session_checker();


    $product_id = $_GET['id'];

    $action = $_GET['action'];


if($action === 'empty')
  unset($_SESSION['cart']);

$result = $obj->sel_Quantity($product_id);


if($result){

  if($obj = $result->fetch(PDO::FETCH_ASSOC)){

    switch($action) {

      case "add":
      if($_SESSION['cart'][$product_id]+1 <= $obj['qty'])
        $_SESSION['cart'][$product_id]++;
      break;

      case "remove":
      $_SESSION['cart'][$product_id]--;
      if($_SESSION['cart'][$product_id] == 0)
        unset($_SESSION['cart'][$product_id]);
        break;



    }
  }
}



header("location:cart.php");

?>
