<?php
  include "class.php";
	$q= "CREATE TABLE IF NOT EXISTS apartment(
	Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	rooms int(11) NOT NULL,Bathroom int(11) NOT NULL,Area int(11) NOT NULL,Furnished varchar(50) NOT NULL,Floor int(11) NOT NULL,Advertising int(50),Price int(11) NOT NULL,Address varchar(50) NOT NULL,Phone int(11)NOT NULL,Image varchar(240))";
	$db->myExec($q);
	
	
	
	$q= "CREATE TABLE IF NOT EXISTS regisers(
	Id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	username varchar(50) NOT NULL,email varchar(50) NOT NULL,password varchar(50) NOT NULL)";
	$db->myExec($q);

?>

