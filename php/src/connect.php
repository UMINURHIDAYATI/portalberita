<?php
$servername = "172.20.0.2";
$username = "root";
$password = "admin";
$basename = "projek";

$dbc = mysqli_connect($servername, $username, $password, $basename) or die("Connection to DB failed");
if($dbc){
}
?>