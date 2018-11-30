<?php

   $pd=new PDO("mysql:host=localhost","root","");
   $q="create database apartments7;";

   $pd->exec($q);

?>
