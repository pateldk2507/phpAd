<?php 
session_start();

$name = $_SESSION['uname'];
if(empty($name)){
    header("Location: adminlogin.php");
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo "Admin";?> <i class="fa fa-user"></i><b class="caret"></b></a>
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
                            Welcome <?php echo "Admin"; ?>
                        </h1>

  
  
  <fieldset>
	<form onsubmit="event.preventDefault();">

    <h4> <b style="font-size:25px"> Upload E-copy of Magazine</b> </h4>

    <br><br>
          
      
        <div>
		<label for="AdDate"><b>Choose Starting Date</b></label>
		<input type="date" id="sdate" name="date"  required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
        </div>


      
        <div>
		<label for="AdDate"><b>Choose Ending Date</b></label>
		<input type="date" id="edate" name="date"  required class="form-control1 ng-invalid ng-invalid-required ng-touched" ng-model="model.name">
        </div>
        
      
	
		<br>
		<label for="image"><b>Upload Thumbnail</b></label>
		<input type="file" id="image" name="getImage">
		
        <br>

        <br>
		<label for="image"><b>Upload Pdf</b></label>
		<input type="file" id="pdf" name="getPdf">
		
        <br>

      

<br>

       
    
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
     const pdf = document.querySelector("#pdf").files[0];
     if(!file || !pdf){
        // saveData("");
        alert("choose files to upload");
         
     }else{
        const name = new Date() + '-' + file.name;
        const pname = new Date() + '-' + pdf.name;
        const metadata = {
         contentType : file.type
        }
        const datam = {
          contentType : pdf.type
        }
     const task = ref.child(name).put(file,metadata);
     task
     .then(snapshot => snapshot.ref.getDownloadURL())
     .then(url => {   
              var url1 = url; 
      const t2 = ref.child(pname).put(pdf,datam);
      t2
      .then(snapshot => snapshot.ref.getDownloadURL())
      .then(url => {
        
        saveData(url1,url);

      })

      
      
     })



     }
     
    }


  function saveData(u1,u2){
      
                var imgUrl = u1;
                var pdfUrl = u2;
                var stdate = $('#sdate').val();
                var endate = $('#edate').val();

          
                $.ajax({
				        url: "saveEcopy.php",
				        type: "POST",
				      data: {
					          imageUrl : imgUrl,
                    pdfUrl : pdfUrl,
                    sdate : stdate,
                    edate : endate
				},
                cache: false,
                success: function(dataResult){
                    
                    
                    var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                        alert("upload  Successfully");
                        $("#btnSubmit").attr("disabled", false);
                        
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

