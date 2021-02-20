<?php 

include_once "../config.php";

if(empty($_POST['title']) || empty($_POST['desc']) || empty($_POST['phone']) || empty($_POST['addr']) || empty($_POST['date']) || empty($_POST['ClientEmail']))
{
    echo "Please fill required fields!";
    return false;
}

$title = $_POST['title'];
$desc = $_POST['desc'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$addr = $_POST['addr'];
$email = $_POST['ClientEmail'];
$height = $_POST['height'];
$width  = $_POST['width'];
$imageUrl = $_POST['imageUrl'];

$sql = "INSERT INTO `clientad`(`clientEmail`, `AdTitle`, `AdDesc`, `ClientPhone`, `ClientAddr`, `StartDate`, `height`, `width`, `ImageURL`) VALUES ('$email','$title','$desc','$phone','$addr', '$date', '$height','$width', '$imageUrl' );";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>