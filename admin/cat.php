<?php 

include_once "../config.php";


$category = $_POST['category'];
$action = $_POST['action'];

if($action == 'save'){
    $sql = "INSERT INTO `category`( `category`) VALUES ('$category')";

}else if($action == 'delete'){
    $sql = "delete from category where category= '$category' ";

}else if($action == 'edit'){
    $myId = $_POST['id'];
    $sql = "UPDATE `category` SET `category`='$category' WHERE index_ = '$myId' ";
}



if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>