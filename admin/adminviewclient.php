<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<head>

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Admin <i class="fa fa-user"></i><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                     
                        <li class="m_2"><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include 'sidebar.php'; ?>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">
                     Registered Clients
                        </h1>
                        <?php 
if($_SESSION['uname']=='root'){
    include_once "../config.php";
    $get="SELECT * FROM client ORDER BY client_name";
    $query=mysqli_query($conn,$get);
    echo "<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'> <table class='table table-striped table-hover  info table-bordered table-responsive'>
        <tr>
            <th> Index </th>
            <th>Client ID</th>

            <th>Name</th>
            <th>Email</th>
            
          
            <th>Contact</th>
          
            <th>Address</th>
            <th>Country</th>
            <th>Delete</th>


        </tr>";
    $counter =0;

    while($res=mysqli_fetch_array($query))
    {$counter++;
    $name=$res['client_name'];
    $email=$res['email'];
    $pass=$res['password'];
    
    $phone=$res['phone'];
    
    $address=$res['address'];
    $country=$res['country'];
    $id=$res['id'];
    
        echo "<tr>
            <td>$counter </td>
            <td>$id</td>
             <td>$name</td>
            <td>$email</td>
            
            <td>$phone</td>
            
            <td>$address</td>
            <td>$country</td>
      <td>" ?> 
            <form action="deleteclient.php" method="POST">
        <input type='checkbox' Name='d[]' value='<?php echo $email?>'>
       
<?php
      echo "</td>";
    ?>
    </tr>
    
 
<?php } ; ?>
 

</table>
</div>
<input type="submit" value="Delete Selected" class="btn btn-primary">
      </form>
<?php }
    else
    {

        echo "<script>
        alert('Admin Please Login First.')
        </script>";
        echo "<meta http-equiv='refresh' content='2;url =adminlogin.php'/>";


    }

 ?>
                       
                    </div>
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
