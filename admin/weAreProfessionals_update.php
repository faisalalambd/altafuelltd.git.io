<?php include("config.php");

echo  $id           = $_GET['id'];
echo  $address      = ($_REQUEST['address']);
echo  $email        = ($_REQUEST['email']);
echo  $phone        = ($_REQUEST['phone']);
echo  $facebook     = ($_REQUEST['facebook']);
echo  $twitter      = ($_REQUEST['twitter']);
echo  $linkedin     = ($_REQUEST['linkedin']);
echo  $map          = ($_REQUEST['map']);

$sql = "UPDATE weAreProfessionals SET address='$address', email='$email', phone='$phone', facebook='$facebook', twitter='$twitter', linkedin='$linkedin', map='$map' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: weAreProfessionals.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
