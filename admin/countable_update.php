<?php include("config.php");

echo  $id               = $_GET['id'];
echo  $number           = ($_REQUEST['number']);
echo  $title            = ($_REQUEST['title']);

$sql = "UPDATE  countable  SET number='$number', title='$title' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: countable.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
