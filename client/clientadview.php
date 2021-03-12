<?php 
session_start();
$email=$_SESSION['email'];
$name = $_SESSION['name'];
if(empty($email)){
    header("Location: login.php");
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
	<form onsubmit="event.preventDefault();">

    <h4> <b style="font-size:25px"> Advertise Information </b> </h4>

    <br><br>
    <div>
    <label for=""> <b> Where you want to show your advertise </b></label><br>
        <select name="showAd"  class="form-control1 ng-invalid ng-invalid-required ng-touched" id="showAd">
            <option value="0">Select Option</option>
            <option value="social">Social Media</option>
            <option value="news">News paper</option>
            <option value="web">On our Website</option>
        </select>
        </div>

        <br>
        <div>
        <label for=""> <b> Category of Advertise </b></label><br>
        <select name="AdCat" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="AdCat">
        <option value='cat'>Select Category</option>
          <?php 

            include_once "../config.php";
            $sql = "select category  from category ";
            $qry = mysqli_query($conn,$sql);
            while($res = mysqli_fetch_array($qry)){
                $cat = $res['category'];
                echo "<option value=$cat>$cat</option>";
        } ?>
        </select>
        </div>
        
        <br>
        <div>
		<label for="titleAd"><b>Title for Ad</b></label>
		<input type="text" id="title" name="title" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		</div>

		<br>
        <div>
		<label for="DescAd"><b>Description for Ad</b></label>
		<input type="text" id="desc" name="desc" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		</div>

		<br>
        <div>
		<label for="Mno"><b>Mobile Number</b></label>
		<input type="text" id="phone" name="phone" accept="number" maxlength="10" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
		</div>


		<br>
        <div>
		<label for="Address"><b>Address</b></label>
		<input type="text" id="addr"  name="addr" required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
        </div>

		<br>
        <div>
		<label for="AdDate"><b>Choose Date</b></label>
		<input type="date" id="date" name="date"  required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
        </div>
        
        <br>
        <div id="Adsize">
            <label for="Adsize"><b> Size of Ad.</b></label> <br>
            <input type="number" id="height" name="height" placeholder="Height"> X
            <input type="number" id="width" name="width" placeholder="Width">
        </div>

	
		<br>
		<label for="image"><b>Upload image(optional)</b></label>
		<input type="file" id="image" name="getImage">
		
        <br>

    <div>
    <label for=""> <b> select your plan </b></label><br>
        <select name="plan"  class="form-control1 ng-invalid ng-invalid-required ng-touched" id="plan">
                <option value="select plan"> Select Plan </option>
        <?php 
        
            $sql = "select plan  from plans ";
            $qry = mysqli_query($conn,$sql);
            while($res = mysqli_fetch_array($qry)){
                $cat = $res['plan'];
                echo "<option value=$cat>$cat</option>";
        } ?>
        </select>
        </div>  

<br><br>

        <input type="hidden" id="ClientEmail" name="ClientEmail" value="<?php echo $email ?>">
    
    <br>
		<input  type="button" id="btnSubmit"  value = 'SUBMIT' id="butsave" onclick="uploadImage();" style="margin-bottom:10px;"  class="btn btn-primary">
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


    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-storage.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBJbAGlsrLk_EzoohuFrBUf0PJ0gJhmw_I",
    authDomain: "chatapp-c7d7c.firebaseapp.com",
    databaseURL: "https://chatapp-c7d7c.firebaseio.com",
    projectId: "chatapp-c7d7c",
    storageBucket: "chatapp-c7d7c.appspot.com",
    messagingSenderId: "215799475254",
    appId: "1:215799475254:web:38d95301abf64b4b76bc97",
    measurementId: "G-9HE7LWEVGS"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  console.log(firebase);

  function uploadImage(){

    $("#btnSubmit").attr("disabled", true);
     const ref = firebase.storage().ref();
     const file = document.querySelector("#image").files[0];
     if(!file){
         saveData("");
     }else{
        const name = new Date() + '-' + file.name;
     const metadata = {
         contentType : file.type
     }
     const task = ref.child(name).put(file,metadata);
     task
     .then(snapshot => snapshot.ref.getDownloadURL())
     .then(url => {   
               saveData(url);
     })

     }
     
    }
  function saveData(myurl){
      alert("Your ad preference is saved, make sure you complete payment to publish it!")
                var title = $('#title').val();
	        	var desc = $('#desc').val();
		        var phone = $('#phone').val();
                var addr = $('#addr').val(); 
                var date = $('#date').val();
                var height = $('#height').val();
                var width = $('#width').val();
                var ClientEmail = $('#ClientEmail').val();
                var imgUrl = myurl;
                var category = $('#AdCat').find(":selected").val();
                var publish = $('#showAd').find(":selected").val();
                var plan = $('#plan').find(":selected").val();
                
                $.ajax({
				url: "saveAd.php",
				type: "POST",
				data: {
					title: title,
					desc: desc,
					phone: phone,
                    ClientEmail: ClientEmail,
                    addr : addr,
                    date : date,
                    height : height,
                    width : width,
                    imageUrl : imgUrl,
                    category : category,
                    publish : publish,
                    plan : plan
				},
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                        alert("Add Success");
                        $("#btnSubmit").attr("disabled", false);
                        location.replace("../feedback/formpage.php");
					}
					else if(dataResult.statusCode==201){
                        alert("Failed");
					}
				}
			});
		}
</script>
</body>

</html>

