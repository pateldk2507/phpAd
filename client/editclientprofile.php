<?php 
session_start();
$email=$_SESSION['email'];
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
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
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
                            Welcome Client
                        </h1>
<fieldset>

<?php 
	
		$id=$_SESSION['email'];
	
		$conn = mysqli_connect('localhost', 'root', '', 'adserverdatabase');
		$qry = "select * from client where email='$id'";
		$query=mysqli_query($conn,$qry);
		
		$name="";
		if($query== TRUE){
			
		while($res= mysqli_fetch_array($query))
		{
			?>
		

<h1>Edit Your Profile</h1>
	<form action="editclientprofile.php" method="POST">
		<label id="email">Name</label>
		<input type="text" name="client_name" value="<?php echo $res['client_name'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		<br><br>
		<label id="email">Phone Number</label>
		<input type="number" name="client_mno"  value="<?php echo $res['phone'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		<br><br>
		<label id="email">Company Name</label>
		<input type="text"	name="client_company" value="<?php echo $res['company'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		<br><br>
		<label id="email">Website</label>
		<input type="text" name="client_website" value="<?php echo $res['sitename'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		
		<br><br>
		<label id="email">Address</label>
		<input type="text" name="client_address" value="<?php echo $res['address'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		<br><br>
		<label id="email">Email</label>
		<input type="email" name="email" value="<?php echo $res['email'] ?>" class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		<br><br>
		<label id="email">Password</label>
		<input type="password" name="pass"  class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		
		
		
		<br><br>
		<hr>
		<input type="submit" name="sub" value="UPDATE" class="btn btn-danger">
	
	</form>
</fieldset>
<?php 
		}	
		}?>

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
	
	
	

<?php  
//session_start();
if(isset($_POST['sub']))
{
	$chkid=$_SESSION['id'];
	$chkemail=$_SESSION['email'];
	include_once '../config.php';
	
	if (!empty($_POST['email'])  && !empty($_POST['client_name']) && !empty($_POST['client_mno']) && !empty($_POST['client_address']) && !empty($_POST['client_company'])) 
	{
		
		$name =  $_POST['client_name'];
		$mno = $_POST['client_mno'];
		$cmp = $_POST['client_company'];
		$addr = $_POST['client_address'];
		$web = $_POST['client_website'];
		$pass = $_POST['pass'];
		
		$insert2 = "UPDATE client SET email='$email',password='$pass',client_name='$name',phone='$mno',company='$cmp',sitename='$web',address='$addr' WHERE email='$chkemail'";
		$query2 = mysqli_query($conn, $insert2);
		
		echo "<script>
			alert('Update Success')
			</script>";
		  echo "<script>
        window.location.href='clientpanel.php'
        </script>";
	}
	else
	{
		echo "<script>
			alert('Fill All Required Fields')
			</script>";
		  echo "<script>
        window.location.href='clientpanel.php'
        </script>";
	
	}	
   /* echo "<script>
        window.location.href='../login.php'
        </script>

    ";*/
}


?>
