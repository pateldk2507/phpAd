<?php 

include_once "../config.php";


$category = $_POST['category'];
$price = $_POST['price'];
$action = $_POST['action'];

if($action == 'save'){
    $sql = "INSERT INTO `plans`(`plan`, `price`) VALUES ('$category','$price')";

}else if($action == 'delete'){
    $sql = "delete from plans where plan= '$category' ";

}else if($action == 'edit'){
    $myId = $_POST['id'];
    $sql = "UPDATE `plans` SET `plan`='$category',`price`='$price' WHERE index_ = '$myId' ";
}



if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>