<?php
$servername="localhost";
$username="root";
$password="";
$database="users";
$conn=mysqli_connect($servername,$username,$password,$database);
if ($conn) {
    echo "succes";
}
else{
    die ("error".mysqli_connect_error());
}