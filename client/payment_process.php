<?php
session_start();
include '../config.php';
if(isset($_POST['amt']) && isset($_POST['name'])){
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"insert into payment(name,amount,payment_status,added_on) values('$name','$amt','$payment_status','$added_on')");
    $_SESSION['OID']=mysqli_insert_id($con);
}


if(isset($_POST['payment_id']))
{
    $mail = $_POST['name'];
    echo "<script>
            console.log($mail);
    </script>";

    $payment_id=$_POST['payment_id'];
    
    mysqli_query($conn,"update clientad set payment='Success' where clientEmail='$mail' ");
}else{
    mysqli_query($conn,"update clientad set payment='Failed' where clientEmail='$mail' ");
}
?>