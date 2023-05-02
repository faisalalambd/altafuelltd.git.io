<?php include("config.php");

echo  $number   = ($_REQUEST['number']);
echo  $title    = ($_REQUEST['title']);

$sql = "INSERT INTO countable (number, title) VALUES ('$number', '$title')";

if (mysqli_query($conn, $sql)) {
    header("Location: countable.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
