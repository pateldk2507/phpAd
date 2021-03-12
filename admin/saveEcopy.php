<?php 

include_once "../config.php";

$imageUrl = $_POST['imageUrl'];
$pdfUrl = $_POST['pdfUrl'];
$sdate = $_POST['sdate'];
$edate = $_POST['edate'];

$sql = "INSERT INTO `ecopy`(`imgUrl`, `pdfUrl`, `sDate`, `eDate`) VALUES ('$imageUrl','$pdfUrl','$sdate','$edate')";

if (mysqli_query($conn, $sql)) {
    echo json_encode(array("statusCode"=>200));
} 
else {
    echo json_encode(array("statusCode"=>201));
}
mysqli_close($conn);


?>