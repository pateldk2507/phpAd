<?php 

include_once "../config.php";

if($_POST['isValid'] != 'yes'){
    header('Location: ../index.php');
}
else{


$experience = $_POST['experience'];
$comment = $_POST['comment'];
$name = $_POST['name'];
$email = $_POST['email'];


$sql = "INSERT INTO `feedback`(`experience`, `comment`, `name`, `email`) VALUES ('$experience','$comment','$name','$email');";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);

}
?>
