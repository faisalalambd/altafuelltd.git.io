<?php

$server_name        =   "localhost";
$user_name          =   "srsomgcd_altafuel_admin";
// $user_name          =   "root";
$user_password      =   "123@jAmifree";
// $user_password      =   "";
$database_name      =   "srsomgcd_altafuel";

$conn = mysqli_connect($server_name, $user_name, $user_password, $database_name);

if ($conn) {

    // echo "Connected!";

} else {

    echo "Connection Failed!" . mysqli_connect_error();
}
