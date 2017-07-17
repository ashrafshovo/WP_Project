<?php

include 'config/db_connect.php';

$sql=$con->query("select * from visitor");
$visitors=$sql->num_rows;

$sql=$con->query("select * from users");
$users=$sql->num_rows;

$sql=$con->query("select * from forum");
$forum=$sql->num_rows;

$sql=$con->query("select * from reply");
$reply=$sql->num_rows;

$discussion=$forum+$reply;

$sql=$con->query("select * from blog_post");
$post=$sql->num_rows;

$sql=$con->query("select * from comments");
$comments=$sql->num_rows;

$sql=$con->query("select * from comments");
$comments=$sql->num_rows;

$directory = "../";
$filecount = 0;
$files = glob($directory . "*.php");
if ($files){
$filecount = count($files);
}

?>