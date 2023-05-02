<?php include("config.php");

echo  $name             = ($_REQUEST['name']);
echo  $designation      = ($_REQUEST['designation']);
echo  $facebook         = ($_REQUEST['facebook']);
echo  $twitter          = ($_REQUEST['twitter']);
echo  $instagram        = ($_REQUEST['instagram']);
echo  $linkedin         = ($_REQUEST['linkedin']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO team (image, name, designation, facebook, twitter, instagram, linkedin) VALUES ('$filename','$name', '$designation', '$facebook', '$twitter', '$instagram', '$linkedin')";

if (mysqli_query($conn, $sql)) {
    header("Location: team.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
