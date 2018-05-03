<?php
   include('DB.php');

   session_start();
   
   session_destroy();
   
   header('location: pas_login.php');

?>