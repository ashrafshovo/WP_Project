<?php

$servername="localhost";
$username="root";
$password="";
$db="TechForum";
$con=new mysqli($servername,$username,$password,$db);
if($con -> connect_error){
     die("Error : " .$con -> connect_error);
}


















?>


