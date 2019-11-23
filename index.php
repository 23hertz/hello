<?php

include_once("classes/users.php");
 
    $obj = new Lists; 

    if(ISSET($_POST['list_todo'])){

    	$todo_title = $_POST['todo_title'];

    	$todo_description = $_POST['todo_description'];

    	/*$todo_date = date("d/m/y H:i:s");*/
        $todo_date = date("d/m/y h:i:s");

    	$obj->todo_Insert($todo_title,$todo_description,$todo_date);
    }
    

 

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOLT Sports Shop</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">BOLT Sports Shop</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li><a href="index.php">Index</a></li>
          <li><a href="view_todo.php">View</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </section>
    </nav>



    <div class="row" style="margin-top:10px;">
      <div class="small-12">

      	   <form method="POST" action="" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Todo Title</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="" name="todo_title">
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Discription</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" name="todo_description">
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Login" name="list_todo" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>

        </div>
      </div>
    </form>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; BOLT Sports Shop. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
