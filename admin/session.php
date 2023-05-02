<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "srsomgcd_altafuel_admin", "123@jAmifree", "srsomgcd_altafuel");
// $conn = mysqli_connect("localhost", "root", "", "srsomgcd_altafuel");

// Starting Session
session_start();

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from user_admin where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
