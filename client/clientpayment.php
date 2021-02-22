<?php 
session_start();
$email=$_SESSION['email'];
$name = $_SESSION['name'];
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
                            Welcome <?php echo $name ?>
                        </h1>
<fieldset>

      <?php 
  //session_start();
  include_once "../config.php";
  $email=$_SESSION['email'];

  $select="select * from clientad where ClientEmail= '$email'";
  $query=mysqli_query($conn,$select);
    echo "<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'><table class='table table-striped table-hover table-bordered table-responsive'>
    <tr class='table info'>
      <th>S. No.</th>
      <th>Advertise Title</th>
      <th>Date</th>
      <th>Select Plan </th>
      <th> Total Amount </th>
      <th>Payment Status</th>
      <th>Complete your payment</th>
    </tr>";
    $counter =0;
  while($res=mysqli_fetch_array($query))
  {$counter++;
  $adtitle=$res['AdTitle'];
  $date = $res['StartDate'];
  //$payment=$click*0.75;
  ?>

    <tr><?php echo "
      <td>$counter</td>
      <td>$adtitle</td>
      <td>$date</td>
      <td>  <select name='showAd' class='form-select' id='showAd'>
      <option value='basic'>Basic</option>
      <option value='pro'>Pro</option>
      <option value='premium'>Premium</option>
  </select> </td>
  <td>1050</td>
  <td>Pending</td>
      <td><form action = 'pay.php' method= 'POST'>
           <input type='button' value = 'PAY'>
           </form>
      </td>

      ";
    ?>
    </tr>
    
 
<?php } ; ?>
 

</table>
</div>
</fieldset>

<h5> <b> Basic plan:</b>  show your ad on ads area of newspaper <br> for onlian ad it will show for 1 day </h5>
<h5> <b>Pro plan:</b> show your ad on first page of newspaper <br> for onlian ad it will show for 3 days </h5>
<h5> <b>Premium plan:</b> show your ad on first page and on our website <br> for onlian ad it will show for 7 days </h5>
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
  
