
<?php 
session_start();
$name = $_SESSION['uname'];

if(empty($name)){
    header("Location: adminlogin.php");
}


include_once '../config.php';

$sql= "SELECT  (SELECT COUNT(*) FROM clientad) AS totalClient,(SELECT COUNT(*) FROM client)   AS totalAds,(SELECT count(index_) FROM `clientad` WHERE payment    = 'Success') AS SuccessPayment,(SELECT count(index_) FROM `clientad` WHERE payment    = 'Failed')  AS FailedPayment,(SELECT count(index_) FROM `clientad` WHERE payment    = 'Pending') AS PendingPayment,(SELECT count(index_) FROM `feedback` WHERE experience = 'good')    AS GoodExperience,(SELECT count(index_) FROM `feedback` WHERE experience = 'bad')	    AS BadExperience,
               (SELECT count(index_) FROM `feedback` WHERE experience = 'average') AS AverageExperience,
               (SELECT COUNT(index_) FROM `clientad` WHERE payment='Success' and plan ='basic') AS BasicIncome,
               (SELECT COUNT(index_) FROM `clientad` WHERE payment='Success' and plan ='pro') AS ProIncome,
               (SELECT COUNT(index_) FROM `clientad` WHERE payment='Success' and plan ='premium') AS PremiumIncome,
               (SELECT count from `visitors` ) As totalVisit 

                FROM  dual ";

$qry = mysqli_query($conn,$sql);

while($res=mysqli_fetch_array($qry)){

    $client = $res['totalClient'];
    $ads = $res['totalAds'];
    $SuccessPayment = $res['SuccessPayment'];
    $FailedPayment = $res['FailedPayment'];
    $PendingPayment = $res['PendingPayment'];
    $GoodExperience = $res['GoodExperience'];
    $BadExperience = $res['BadExperience'];
    $AverageExperience = $res['AverageExperience'];
    $basicIncome = $res['BasicIncome'];
    $proIncome = $res['ProIncome'];
    $premiumIncome = $res['PremiumIncome'];
    $visit = $res['totalVisit'];
}

$income = ($basicIncome * 1000) +($proIncome * 1500) + ($premiumIncome * 2000); 
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADMIN PANEL</title>

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
            
        <?php include 'sidebar.php' ?>
           
        </nav>
      <?php 
      //include "count.php"
       ?>
    <div id="page-wrapper">
        <div class="graphs">
         <div class="col_3">
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                
                    <i class="pull-left fa fa-users icon-rounded"></i>
                    <div class="stats">

                      <span>Registered Clients</span>
                      <h5><strong><?php echo $client ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-newspaper-o icon-rounded"></i>
                    <div class="stats">
                    <span>Total Advertise</span>
                      <h5><strong><?php echo $ads ?></strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa fa-inr  icon-rounded"></i>
                    <div class="stats">
                    <span>Total Income</span>
                      <h5><strong> <?php echo $income ?> </strong></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 widget widget1">
                <div class="r3_counter_box">
                    <i class="pull-left fa  fa-signal  icon-rounded"></i>
                    <div class="stats">
                    <span>Total Visitors</span>
                      <h5><strong> <?php echo $visit ?> </strong></h5>
                    </div>
                </div>
             </div>
            <div class="clearfix"> </div>
    </div>

     <div class="col_1">
        <div class="col-md-6 stats-info">  
            <div class="panel-heading">
                <h4 class="panel-title">Payment Record</h4>
            </div>
            <div class="panel-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>


        <div class="col-md-6 stats-info">
            <div class="panel-heading">
                    <h4 class="panel-title">Feedback Record</h4>
            </div>
            <div class="panel-body">
                <canvas id="myChart2"></canvas>
            </div>
        </div>


        

      
      </div>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
      <script>
      var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
    
        type: 'pie',
        data: {
        datasets: [{
        data: [<?php echo $FailedPayment ?>, <?php echo $PendingPayment ?>, <?php echo $SuccessPayment ?>],
        backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
    }],

    
    labels: [
        'Failed',
        'Pending',
        'Success']
    },

    // Configuration options go here
    options: {}
});


var ctx = document.getElementById('myChart2').getContext('2d');
        var chart = new Chart(ctx, {
    
        type: 'pie',
        data: {
        datasets: [{
        data: [<?php echo $BadExperience ?>, <?php echo $AverageExperience ?>, <?php echo $GoodExperience ?>],
        backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
    }],

    
    labels: [
        'Bad',
        'Average',
        'Good']
    },

    // Configuration options go here
    options: {}
});


var ctx = document.getElementById('myChart3').getContext('2d');
        var chart = new Chart(ctx, {
    
        type: 'pie',
        data: {
        datasets: [{
        data: [10, 20, 30],
        backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
    }],

    
    labels: [
        'Onlian',
        'Website',
        'Newspaper']
    },

    // Configuration options go here
    options: {}
});



var ctx = document.getElementById('myChart4').getContext('2d');
        var chart = new Chart(ctx, {
    
        type: 'pie',
        data: {
        datasets: [{
        data: [10, 20, 30],
        backgroundColor:["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
    }],

    
    labels: [
        'Onlian',
        'Website',
        'Newspaper']
    },

    // Configuration options go here
    options: {}
});

      
      </script>
       

        



    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
