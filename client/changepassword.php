<?php
session_start();
$email=$_SESSION['email'];
$name = $_SESSION['name'];
if(empty($email)){
    header("Location: login.php");
 }
 else{
    if(isset($_POST['sub'])){
        	include_once "../config.php";
	        $cpass = $_POST['currentPassword'];
	        $npass = $_POST['newPassword'];
            
	        $password = md5($cpass);

	        $select = "SELECT password FROM login where email='$email'";

	        $query = mysqli_query($conn, $select);
	        $res = mysqli_fetch_array($query);

	        $db_pass = $res['password'];
	        
	        if($password == $db_pass)
	        {
                $pass = md5($npass); 
                $newPass = "Update login set password='$pass' where email='$email'";
                $qry = mysqli_query($conn,$newPass);
                echo "<script>
                alert('Your Password is updated')
                </script>";
               
	        }
            else
            {
	            echo "<script>
			        alert('Your Password is incorrect')
			        </script>";
            }
	 
    }
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Client Panel</title>
 <!-- Bootstrap Core CSS -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel='stylesheet' type='text/css' />


    <!-- Graph CSS -->
<link href="../css/lines.css" rel='stylesheet' type='text/css' />

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Nav CSS -->
<link href="../css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="../js/d3.v3.js"></script>
<script src="../js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Adserver</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-nav navbar-right">
                
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $email?> <i class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <?php include 'sidebar.php' ?>
           
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome <?php echo $name ?>
                        </h1>

  
  
  <fieldset>
	<form action="changepassword.php" method="POST">

    <h4> <b style="font-size:25px;color:red;"> Change Password </b> </h4>

    
    <div>
        
        <div>
		<label for="titleAd"><b>Current Password</b></label>
		<input type="password" id="currentPassword" name="currentPassword" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		</div>

		<br>
        <div>
		<label for="DescAd"><b>New Password </b></label>
		<input type="password" id="newPassword" name="newPassword" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		</div>		
        
    
    
    <br>
		<input  type="submit"   value = 'Submit' name="sub"  style="margin-bottom:10px;"  class="btn btn-primary">
        
	</form>
	</fieldset>
</div>

      </form>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
</body>

</html>

