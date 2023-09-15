<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prod";

$con = mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
    die('Could not connect my SQL:' .mysql_error());
}


?>