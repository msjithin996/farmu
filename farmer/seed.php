<!DOCTYPE html>
<html lang="en">
<?php
include_once('../config.php');
        session_start();

	$sql="SELECT * FROM seeds";
$query=mysql_query($sql,$dbcon);
?>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var term = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(term.length){
            $.get("backend-search.php", {query: term}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
		        background: #d2e5b3;

    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>

<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>FarmU</title>
		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">



		<!-- Custom Css -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


	</head>



	<body>
		<div class="main_page">


			<!-- Header *******************************  -->
			<header>
				<div class="top_header">
					<div class="container">
						<div class="pull-left header_left">
							<ul>
		        				<li><a href="#">Phone: <span>+91 9496461545	</span></a></li>
		        				<li><i class="fa fa-envelope-o s_color" aria-hidden="true"></i><a href="#">farmu@gmail.com</a></li>
		        			</ul>
						</div>

						<div class="pull-right header_right">
							<div class="state" id="value1">
								<ul>
											        				<li><i class="fa fa-user s_color" aria-hidden="true"></i><a href="farmer.php">Account</a></li>
</ul>
			        				<div id="polyglotLanguageSwitcher">
									<form action="#">
										<select id="polyglot-language-options">
											<option id="en" value="en" selected>English</option>
											<option value="fr">Malayalam</option>
											<option value="de">hindi</option>
											<option  value="it">tamil</option>
											<option value="es">marathi</option>
										</select>
									</form>
								</div>
							</div>

								
						</div>
					</div> <!-- End of .container -->
				</div> <!-- End of .top_header -->

				<div class="bottom_header">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<div class="search-box">
									<form action="validate.php" method="post" class="clearfix">
										<input type="text" autocomplete="off" name="search" placeholder="Search...">
										<button><i type="submit" class="fa fa-search"></i></button>
																				<div class="result"></div>

									</form>
								</div>
							</div>
							<div class="col-md-4 col-sm-5 col-xs-6 logo-responsive">
								<div class="logo-area">
									<a href="index.php" class="pull-left logo"><img src="images/logo/logo.png" alt="LOGO"></a>
								</div>
							</div>
							<div class="col-md-4 col-sm-7 col-xs-6 pdt-14">
								<div class="login_option float_left">
							   		<div class="login_form">
							   			<div class="user">
							   				<i class="icon-photo"></i>
							   			</div>
							   			<div class="login-info">
								   			<div class="welcome" ><?php echo $_SESSION["username"]  ?></div>
									   		<!-- select menu -->
									            <div class="g-input f1 mb-30">
							<li><a href="../signout.php">signout</a></li>
							                         
							                          
							                        </div>
								   		</div>
							   		</div> <!-- End of .cart_list -->
							    </div>
							   

							</div>

						</div>

					</div>
				</div> <!-- End of .bottom_header -->
			</header>





			<!-- Menu ******************************* -->
			<div class="theme_menu color1_bg">
				<div class="container">
					<nav class="menuzord pull-left" id="main_menu">
					  	    <ul class="menuzord-menu">
					      <li><a href="index.php">Home</a></li>
					      <li><a href="about-us.html">About us</a></li>
					      <li><a href="shop.php">Store</a></li>
					      <li class="current_page"><a href="seed.php">Seeds</a></li>
					       <li><a href="news.php">gov policies</a></li>
						   <li><a href="sell.php">SELL</a></li>
					      <li><a href="contact.html">Contact us</a></li>
					   </ul> <!-- End of .menuzord-menu -->
				   </nav> <!-- End of #main_menu -->


				   <!-- ******* Cart And Search Option ******** -->
				  
				     
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->



				   <!-- ******* Cart And Search Option ******** -->
				  
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->


			<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
			                    <h1>our store</h1>
			                    <h4>Welcome to certified online organic products suppliersr</h4>
			                </div>
			            </div>
			        </div>
			    </div>
				<div class="breadcrumb-bottom-area">
				    <div class="container">
				        <div class="row">
				            <div class="col-lg-8 col-md-5 col-sm-5">
				                <ul>
				                    <li><a href="#">Home</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li><a href="#">Store</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li>our store</li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
			</section>


			<!-- Shop Page Content************************ -->
	        <div class="shop_page featured-product">
	        	<div class="container">
	        		<div class="row">
	        			<div class="col-lg-9 col-md-8 col-sm-12 col-sx-12">
	        					        			
		        			<div class="row">
				            <?php while ($row = mysql_fetch_assoc($query)) { ?>
							
					            <!--Default Item-->
					            <div class="col-md-4 col-sm-6 col-xs-12 default-item" style="display: inline-block;">
					                <div class="inner-box">
					                    <div class="single-item center">
					                        <figure class="image-box"><img src="images/<?php echo $row['img'] ?>" alt=""><div class="product-model new">New</div></figure>
					                        <div class="content">
					                        	<h3><a href="seed-single.php?id=<?php echo $row['productname'] ?>"><?php echo $row['productname'] ?></a></h3>
					                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
					                            <div class="price"><?php echo $row['price'] ?></div>
					                        </div>
					                        <div class="overlay-box">
					                        	<div class="inner">
						                        	<div class="top-content">
						                        		<ul>
						                        			<li><a href="#"><span class="fa fa-eye"></span></a></li>
						                        			<li class="tultip-op"><span class="tultip"><i class="fa fa-sort-desc"></i>ADD TO CART</span><a href="#"><span class="icon-icon-32846"></span></a>
																
															</li>
						                        			<li><a href="#"><span class="fa fa-heart-o"></span></a></li>
						                        		</ul>
						                        	</div>
						                        	<div class="bottom-content">
						                        		<h4><a href="seed-single.php?id=<?php echo $row['productname'] ?>">DESCREPTION</a></h4>
						                        		<p><?php echo $row['desc'] ?></p>
						                        	</div>
					                        	</div>
					                        </div>
						                </div>
					                </div>
					            </div>
					           <?php } ?>
				
					       
					            
			        		</div>
			        	</div>

						<!-- _______________________ SIDEBAR ____________________ -->
	        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
	        				<div class="wrapper">
	        					<div class="sidebar_search">
	        						<form action="shop.php">
	        							<input type="text" name="search" placeholder="product">
	        							<button type="submit" value="search" class="tran3s color1_bg"><i class="fa fa-search" aria-hidden="true"></i></button>
	        						</form>
	        					</div> <!-- End of .sidebar_styleOne -->

	        					<div class="sidebar_categories">
	        						<div class="theme_inner_title">
										<h4>Categories</h4>
									</div>
									<ul>
										<li><a href="index.php#vegetables" class="tran3s">Vegetables</a></li>
										<li><a href="index.php#fruits" class="tran3s">Fruits</a></li>
										<li><a href="index.php#seeds" class="tran3s">seeds</a></li>
									</ul>
	        					</div> <!-- End of .sidebar_categories -->

	        					
								<div class="best_sellers clear_fix wow fadeInUp">
									<div class="theme_inner_title">
										<h4>popular products</h4>
									</div>

									<div class="best_selling_item clear_fix border">
										<div class="img_holder float_left">
											<img src="images/shop/9.png" alt="image">
										</div> <!-- End of .img_holder -->

										<div class="text float_left">
											<a href="shop-single.html"><h6>Turmeric Powder</h6></a>
											<ul>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
											</ul>
											<span>$ 15.00</span>
										</div> <!-- End of .text -->
									</div> <!-- End of .best_selling_item -->

									<div class="best_selling_item clear_fix border">
										<div class="img_holder float_left">
											<img src="images/shop/10.png" alt="image">
										</div> <!-- End of .img_holder -->

										<div class="text float_left">
											<a href="shop-single.html"><h6>Pure Jeans Coffee</h6></a>
											<ul>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
											</ul>
											<span>$ 34.00</span>
										</div> <!-- End of .text -->
									</div> <!-- End of .best_selling_item -->

									<div class="best_selling_item clear_fix">
										<div class="img_holder float_left">
											<img src="images/shop/11.png" alt="image">
										</div> <!-- End of .img_holder -->

										<div class="text float_left">
											<a href="shop-single.html"><h6>Columbia Chocolate</h6></a>
											<ul>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
											</ul>
											<span>$ 34.99</span>
										</div> <!-- End of .text -->
									</div> <!-- End of .best_selling_item -->
								</div> <!-- End of .best_sellers -->



	        				</div> <!-- End of .wrapper -->
	        			</div> <!-- End of .sidebar_styleTwo -->
	        		</div> <!-- End of .row -->
	        	</div> <!-- End of .container -->
	        </div> <!-- End of .shop_page -->


			<!-- Footer************************* -->

			<footer>
				<div class="bottom_footer clear_fix">
					<div class="container">
						<h6 class="pull-left">Created by CodeWreckor
						
						</h6>
						
					</div>
				</div>
			</footer>
			


			<!-- Scroll Top Button -->
			<button class="scroll-top tran3s color2_bg">
				<span class="fa fa-angle-up"></span>
			</button>
			<!-- pre loader  -->
		 	<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

<!-- Js File_________________________________ -->

		<!-- j Query -->
		<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
		<!-- Bootstrap JS -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Vendor js _________ -->
		<!-- Google map js -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> <!-- Gmap Helper -->
		<script src="js/gmap.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<!-- ui js -->
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<!-- Responsive menu-->
		<script type="text/javascript" src="js/menuzord.js"></script>
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.migration.min.js"></script>

		<!-- landguage switcher js -->
		<script type="text/javascript" src="js/jquery.polyglot.language.switcher.js"></script>
		<!-- Fancybox js -->
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<!-- js count to -->
		<script type="text/javascript" src="js/jquery.appear.js"></script>
		<script type="text/javascript" src="js/jquery.countTo.js"></script>
		<!-- WOW js -->
		<script type="text/javascript" src="js/wow.min.js"></script>

		<script type="text/javascript" src="js/SmoothScroll.js"></script>

		<script src="js/bootstrap-select.min.js"></script>
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>
		<script type="text/javascript" src="js/google-map.js"></script>


		</div> <!-- End of .main_page -->
	</body>

<!-- Mirrored from steelthemes.com/demo/html/organic_store/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2017 09:08:47 GMT -->
</html>