<?php include("config.php");

echo  $name         = ($_REQUEST['name']);
echo  $designation  = ($_REQUEST['designation']);
echo  $paragraph    = ($_REQUEST['paragraph']);

$sql = "INSERT INTO clientsTestimonial (name, designation, paragraph) VALUES ('$name', '$designation', '$paragraph')";

if (mysqli_query($conn, $sql)) {
    header("Location: clientsTestimonial.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
