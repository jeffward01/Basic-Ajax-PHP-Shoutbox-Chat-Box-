<?php
//Connect to MySQL
$connection = mysqli_connect("localhost", "root","root", "jsshoutbox");


if(mysqli_connect_errno()){
  echo 'Failed to connect: '.mysqli_connect_error();
}


?>
