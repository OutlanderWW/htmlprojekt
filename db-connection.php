<?php
$db=mysqli_connect("192.168.64.11","HLMT", "Xel","Bajo")
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error())
}
?>