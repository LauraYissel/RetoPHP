<?php
   function conectar (){
     $user="root";
     $pass="";
     $server="localhost";
     $db="noticias";
     $con=mysql_connect($server,$user,$pass) or die ("Error")
     mysql_select_bd($db,$con);

     return $con;
   }
?>