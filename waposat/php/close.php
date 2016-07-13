<?php
session_start();
if(!isset($_SESSION['usuario']))
   {
        echo "No hay ninguna sesion iniciada";
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       echo "Has cerrado la sesion";
       
   }
?>