<?php

     session_start();
      
     /*
     echo '<pre>';
     print_r($_SESSION);
     echo '</pre>';
 
     unset($_SESSION['x']);

     echo '<pre>';
     print_r($_SESSION);
     echo '</pre>';

     session_destroy();

     echo '<pre>';
     print_r($_SESSION);
     echo '</pre>';
     */

     session_destroy();
     header('location: index.php');

?>