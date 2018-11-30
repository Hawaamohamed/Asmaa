<?php
include "class.php";
$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(1,6,1,300,'No',3,1123456,100000,'Talaat Harb Street',01120784849,'image/h1.jpg')";

$db->myExec($q);

$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(2,5,1,400,'Yes',4,2123456,1000000,'Talaat Harb Street',01120784847,'image/h2.jpg'),(3,6,2,600,'Yes',6,3523456,2000000,'Talaat Harb Street',01120784847,'image/h3.jpg'),(4,6,2,800,'Yes',5,8123456,100000,'Talaat Harb Street',01020784847,'image/h4.jpg')";

$db->myExec($q);

$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(5,8,2,500,'No',7,9423456,1000000,'Mohammed Ali Street',01024784847,'image/p13.jpg'),(6,5,3,600,'Yes',3,3523456,550000,'Mohammed Ali Street',01120784847,'image/p14.jpg'),(7,7,2,600,'No',4,9123456,500000,'Mohammed Ali Street',01220784830,'image/p5.jpg')";


$db->myExec($q);
$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(8,4,2,400,'No',7,7423456,500000,'Faisal Street',01524785647,'image/h1.jpg'),(9,7,3,800,'Yes',1,9423456,1000000,'Faisal Street',01028784847,'image/p13.jpg'),(10,9,3,900,'Yes',5,2923456,2000000,'Faisal Street',01154784844,'image/p13.jpg')";

$db->myExec($q);

$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(11,10,3,700,'No',4,2423456,1000000,'Ramses Street',01124785647,'image/p14.jpg'),(12,4,2,500,'Yes',3,2423496,400000,'Ramses Street',01524785647,'image/p14.jpg'),(13,3,1,400,'No',5,3123456,300000,'Ramses Street',,01524785647,'image/p14.jpg')";

$db->myExec($q);

$q = "INSERT INTO apartment(Id,rooms,Bathroom,Area,Furnished,Floor,Advertising,Price,Address,Phone,Image)VALUES(14,4,1,400,'No',4,5823456,400000,'Shubra Street',01124985647,'image/h3.jpg'),(15,4,1,300,'No',1,9923496,500000,'Shubra Street',01124785647,'image/h3.jpg'),(16,5,1,800,'Yes',5,5123456,250000,'Shubra Street',01124785647,'image/p14.jpg')";

$db->myExec($q);



?>
