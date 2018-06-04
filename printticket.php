<?php
session_start();

$source=$_POST['ca'];
$destination=$_POST['cb'];
$fare=$_POST['m'];
$name = $_POST['cname'];
$eid =$_POST['ceid'];
$mob =$_POST['cmob'];
echo $source;
echo"<br>";
echo $destination;
echo"<br>";
echo $fare." Rupees";
echo $name;
echo"<br>";
echo $eid;
echo"<br>";
echo $mob;
echo"<br>";
?>