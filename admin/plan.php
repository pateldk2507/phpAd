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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Plan Name</label>
            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="CategoryName">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Plan Price</label>
            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="PlanPrice">
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="saveCat();" class="btn btn-primary">SAVE</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edit Plan </label>
            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="EditCategoryName">
            <input type="hidden" id="myID"/>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Edit Price </label>
            <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-touched" id="EditPlanPrice">
            
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onclick="EditCat();" class="btn btn-primary">SAVE CHANGES</button>
      </div>
    </div>
  </div>
</div>








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
                    Available plan for User
                        </h1>
                        <?php 
if($_SESSION['uname']=='root'){
    include_once "../config.php";
    $get="SELECT * FROM plans ";
    $query=mysqli_query($conn,$get);
    echo "<div class='bs-example4' data-example-id='contextual-table' style='overflow-x:auto;'> <table class='table table-striped table-hover  info table-bordered table-responsive'>
        <input type='button' name='addCat'  data-toggle='modal' data-target='#exampleModal'  value='Add Plan' class='btn btn-success' style='float:right;margin:15px;'/>
        <tr>
            <th>Index</th>
            <th>Plan Name</th>
            <th>Price </th>
            <th>Action</th>
            
        </tr>";
    $counter =0;

    while($res=mysqli_fetch_array($query))
    {$counter++;
    $name=$res['plan'];
    $price = $res['price'];
    
        echo "<tr>
            <td>$counter</td>
            
            <td>$name</td>
            <td> $price</td>
            
      <td>" ?> 
            <form onsubmit="event.preventDefault();">
        <input type='button' name = 'edit' data-toggle='modal' onclick="editModelsetData(<?php echo $res['index_'] ?>,'<?php echo $res['plan'] ?>',<?php echo $price ?>)" data-target='#EditModal' class="btn btn-warning" value="Edit" id='<?php echo $res['index_'] ?>'>
        <input type='button' name = 'delete' class="btn btn-danger" onclick='deleteData("<?php echo $name ?>");' value="Delete" id='<?php echo $name ?>'>
        <input type='hidden' id='selType'>
<?php
      echo "</td>";
    ?>
    </tr>
    
 
<?php } ; ?>
 

</table>
</div>

      </form>

<script>

    function editModelsetData(data,CAtname,price){
        $("#myID").val(data);
        $("#EditCategoryName").val(CAtname);
        $("#EditPlanPrice").val(price);
    }

   function EditCat(){
    var cat = $("#EditCategoryName").val();
    var price = $("#EditPlanPrice").val();

$.ajax({
    url:'modifyplan.php',
    type: 'POST',
    data : {
        category : cat,
        id : $("#myID").val(),
        price  : price,
        action : 'edit'
    },
    cache: false,
        success: function(dataResult){
            
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                alert("Edit Data Success");
                location.reload();
            }
            else if(dataResult.statusCode==201){
                alert("Failed");
            }
        }
    })
   }

   function saveCat(){
        var cat = $("#CategoryName").val();
        var price = $("#PlanPrice").val();

        $.ajax({
            url:'modifyplan.php',
            type: 'POST',
            data : {
                category : cat,
                price : price,
                action : 'save'
            },
            cache: false,
                success: function(dataResult){
                    
                    var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                        alert("Add Plan Success");
                        location.reload();
					}
					else if(dataResult.statusCode==201){
                        alert("Failed");
					}
				}
        })
   }

   function deleteData(data){
       var delData = confirm("Are you sure want to delete "+data + " Plan ?");
       if(delData == true){   
           var cat = data;

           $.ajax({
            url: "modifyplan.php",
				type: "POST",
				data: {
					category : cat,
                    action : 'delete'
                },
                cache: false,
                success: function(dataResult){
                    
                    var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                        alert("Delete Success");
                        location.reload();
                        
					}
					else if(dataResult.statusCode==201){
                        alert("Failed");
					}
				}
             })
       }else{
           return false;
       }
   }

</script>

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
