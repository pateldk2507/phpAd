<?php 
    $cat =  $_GET['cat'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link href="dashdesk/files/configuration/ficon_file/5c2a7cd1-e61c-4110-835d-0d8cbf642048/logo (1).png" type="image/png" rel="icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Smart Business News"/>
    <meta name="author" content="Smart Business News">
    <meta name="keywords" content="Smart,Business,news">
    <title>Smart Business News</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>

 <!--    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/fonts/line-icons.css"/><link rel="stylesheet" type="text/css" href="css/production.css"/>    <!-- Icon -->
    <!-- Slicknav -->

    <!-- Animate -->
    <!-- Owl carousel -->
    <!-- Main Style -->
    <!-- Responsive Style -->

  </head>
  <body>
     <div id="myModal" class="modal fade" role="dialog" data-backdrop="static" data-keybord="false" data-options="close_on_background_click:false;close_on_esc:false;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5>Select City</h5>
         <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      </div>
      <div class="modal-body ">
                <ul class="city">
                     <li style="float: left;padding: 8px;"><a href="/home/selectCity/5c37992f-51c0-4eab-b2ba-1210bf642048" ><strong><i class="red lni-map-marker"></i></strong>vadodara</a></li>
                  </ul>
            </div>
    </div>
  </div>
</div>
            <!--Start Top Bar -->
      

      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
              <span class="lni-menu"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">

           
          </div>
        </div>

        
      </nav>
      <!-- Navbar End -->
<!-- Page Header Start -->
<style media="screen">
  .Show-item{
    margin-left: 10px;
  }
</style>
      

    <!-- Main container Start -->
    <div class="main-container section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-12 col-xs-12 page-sidebar">
            <aside>
  <!-- Searcg Widget -->
  
  <!-- Categories Widget -->
  <div class="widget categories" style="margin-top:50px">
    <h4 class="widget-title">All Categories</h4>
    <ul class="categories-list">
              <li>
          <a href="ad.php?cat=marriage">
            
            <span style="text-transform:capitalize;">Matrimonial            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=edu">
            
            <span style="text-transform:capitalize;">Education            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=business">
            
            <span style="text-transform:capitalize;">Business           </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=rental">
            
            <span style="text-transform:capitalize;">Rental           </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=property">
            
            <span style="text-transform:capitalize;">Property            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=candc">
            
            <span style="text-transform:capitalize;">Court and Company notices            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=tender">
            
            <span style="text-transform:capitalize;">Tender notices            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=public">
            
            <span style="text-transform:capitalize;">Public notices            </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=auction">
            
            <span style="text-transform:capitalize;">Auction notices           </span> <span class="category-counter"></span>
          </a>
        </li>
              <li>
          <a href="ad.php?cat=other">
            
            <span style="text-transform:capitalize;">others           </span> <span class="category-counter"></span>
          </a>
        </li>
          </ul>
  </div>
  <!-- <div class="widget">
    <h4 class="widget-title">Advertisement</h4>
    <div class="add-box">
       <img class="img-fluid" src="" alt="">
    </div>
  </div> -->
</aside>
          </div>
          <div class="col-lg-9 col-md-12 col-xs-12 page-content">
            <!-- Product filter Start -->
<div class="product-filter">
  <ul class="nav nav-tabs">
   
  </ul>
</div>
<!-- Product filter End -->

<!-- Adds wrapper Start -->
<div class="adds-wrapper">
  <div class="tab-content">
    <div id="grid-view" class="tab-pane fade active show">
      <div class="row ajx-cont">
               
        <?php 

          include_once "config.php";

          $sql = "select * from clientad where  category='$cat' ";
          $query= mysqli_query($conn,$sql);

           $counter=0; 
          while($res= mysqli_fetch_array($query))
		      {$counter++;
		    	?>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="featured-box">

            <div class="title" style="border:1px solid #f0f0f0;border-radius:5px;padding:5px">
              <figure>
                <a><img class="img-fluid" src="<?php echo $res['ImageURL'] ?>" height="500px" width="500px" alt="No Preview Available"></a>
              </figure>


                 <h5 > <?php echo $res['AdTitle'] ?> </h5>
                 <h6>
                    <?php echo $res['AdDesc'] ?>
                 </h6>
                  <hr style="color:#f0f0f0">
                 <h5>

                Address: <?php echo $res['ClientAddr'] ?>

                 </h5> 

                 <hr style="color:#f0f0f0">

                 <a href="tel:"> <i class="lni-phone"></i> <?php echo $res['ClientPhone'] ?> </a>

              </div>

            </div>
          </div>



          <?php 
			
		} ?>
        
        
       
        
                       
                       
                       
                       
                       
       </div>
    </div>
  </div>
</div>
<!-- Adds wrapper End -->


          </div>
        </div>
      </div>
    </div>
    <!-- Main container End -->

<!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
              <div class="widget">
                <div class="footer-logo"><img src="/img/flogo.png" alt=""></div>
                <div class="textwidget">
                  <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt consectetur, adipisci velit.</p>
                </div>
                <ul class="mt-3 footer-social">
                                      <li><a class="facebook" title="facebook" target="_blank" href="http://facebook.com"><i class="lni-facebook-filled"></i></a></li>
                                      <li><a class="twitter" title="twitter" target="_blank" href="http://facebook.com"><i class="lni-twitter-filled"></i></a></li>
                                      <li><a class="instagram" title="instagram" target="_blank" href="http://facebook.com"><i class="lni-instagram-filled"></i></a></li>
                                      <li><a class="linkedin" title="linkedin" target="_blank" href="http://facebook.com"><i class="lni-linkedin-fill"></i></a></li>
                                      <li><a class="google" title="google" target="_blank" href="http://facebook.com"><i class="lni-google-plus"></i></a></li>
                                    <!-- <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                  <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                  <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li> -->
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Quick Link</h3>
                <ul class="menu">
                  <li><a href="/home/aboutus">- About Us</a></li>
                  <li><a href="/faqs">- FAQ's</a></li>
                  <li><a href="#">- Blog</a></li>
                  <li><a href="/issues">- e-copy</a></li>
                 <!--  <li><a href="#">- Shop</a></li> -->
           <!--   <li><a href="#">- Shop</a></li> -->
                  <li><a href="/faqs">- FAQ's</a></li>
                  <li><a href="#">- Blog</a></li>
                  <li><a href="/issues">- e-copy</a></li>

                    <li><a href="/home/aboutus">- About Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Info</h3>
                <ul class="contact-footer">
                  <li>
                    <strong><i class="lni-phone"></i></strong><span>+91 99241 98585</span>
                  </li>
                  <li>
                    <strong><i class="lni-envelope"></i></strong><span>info@smartbusiness.news</span>
                  </li>
                  <li>
                    <strong><i class="lni-map-marker"></i></strong><span><a href="#">Smart Business News<br>
Arvind Apartment, Below Congress Office,<br> Lakdipul, Dandia Bazar,<br>
Vadodara.</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer area End -->

      <!-- Copyright Start  -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>Designed and Developed by <a href="https://techenjoy.in" target="_blank" rel="nofollow">TechEnjoy</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright End -->
    </footer>
    <!-- Footer Section End -->
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a>
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-min.js"></script><script type="text/javascript" src="js/bootstrap.min.js"></script><script type="text/javascript" src="js/jquery.counterup.min.js"></script><script type="text/javascript" src="js/waypoints.min.js"></script><script type="text/javascript" src="js/wow.js"></script><script type="text/javascript" src="js/owl.carousel.min.js"></script><script type="text/javascript" src="js/jquery.slicknav.js"></script><script type="text/javascript" src="js/main.js"></script><script type="text/javascript" src="js/form-validator.min.js"></script><script type="text/javascript" src="js/contact-form-script.min.js"></script><script type="text/javascript" src="js/bootstrap-datepicker.js"></script>    <script>
  $(document).ready(function(){
    $('#area_id').change(function(){
      var c_val = $(this).val();
      var category_id = $('#item_category_id').val();
      if(c_val == ""){
        c_val = 0;
      }
      if(category_id == ""){
        category_id = 0;
      }
      get_post_data(c_val,category_id);
    })
    $('#item_category_id').change(function(){
      var area_id = $('#area_id').val();
      var c_val = $(this).find(":selected").text();
      if(area_id == ""){
        area_id = 0;
      }
      if(c_val == "Select Category"){
        c_val = 0;
      }else{
        alert(c_val);
      }
      
      get_post_data(area_id,c_val);
    })
  })
  function get_post_data(area_id,category_id){
    var url = "/posts/ajx_search/"+area_id+"/"+category_id;
    $.get( url, function( data ) {
      $(".ajx-cont").html( data );
    });
  }
</script>
   <script>
         $(function () {
           setTimeout(function(){ $('.message').fadeOut(1000); }, 10000);
          //  $("a#example6").fancybox({
      		// 		'titlePosition'		: 'outside',
      		// 		'overlayColor'		: '#000',
      		// 		'overlayOpacity'	: 0.9
    			// });
         })
      </script>
   </body>
</html>
