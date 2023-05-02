<?php include("config.php");

echo  $name         = ($_REQUEST['name']);
echo  $email        = ($_REQUEST['email']);
echo  $message      = ($_REQUEST['message']);

$sql = "INSERT INTO sendMessage (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../contact.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
