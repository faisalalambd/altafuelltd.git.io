<?php include("config.php");

echo  $id               = $_GET['id'];
echo  $name         = ($_REQUEST['name']);
echo  $designation  = ($_REQUEST['designation']);
echo  $paragraph    = ($_REQUEST['paragraph']);

$sql = "UPDATE clientsTestimonial SET name='$name', designation='$designation', paragraph='$paragraph' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: clientsTestimonial.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
