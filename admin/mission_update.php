<?php include("config.php");

echo $id            = $_GET['id'];
echo $description   = ($_REQUEST['description']);

$sql = "UPDATE mission SET description='$description' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: mission.php");
} else {
    echo "Error updating record: " . $conn->error;
}
