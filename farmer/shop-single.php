<!DOCTYPE html>
<html lang="en">
	<?php
include_once('../config.php');
        session_start();
$a=$_GET['id'];
	$sql="SELECT * FROM product 	 where productname='$a'";
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
					      <li class="current_page"><a href="shop.php">Store</a></li>
					      <li><a href="seed.php">Seeds</a></li>
					       <li><a href="news.php">gov policies</a></li>
						   <li><a href="sell.php">SELL</a></li>
					      <li><a href="contact.html">Contact us</a></li>
					   </ul> <!-- End of .menuzord-menu -->
				   </nav> <!-- End of #main_menu -->


				   <!-- ******* Cart And Search Option ******** -->
				  
				     
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->




			<section class="breadcrumb-area" style="background-image:url(images/background/2.jpg);">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-12">
			                <div class="breadcrumbs text-center">
			                    <h1>single product</h1>
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
				                    <li><a href="#">Gallery</a></li>
				                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
				                    <li>single product</li> 
				                </ul>
				            </div>
				            <div class="col-lg-4 col-md-7 col-sm-7">
				                <p>We provide <span>100% organic</span> products</p>
				            </div>
				        </div>
				    </div>
				</div>
			    
			</section>


			<!-- Single Shop page content ________________ -->

	        <div class="shop_single_page">
	        	<div class="container">
	        		<div class="row">


						<!-- _______________________ SIDEBAR ____________________ -->
	        			<div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 sidebar_styleTwo">
	        				<div class="wrapper">
	        				

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
											<span>rs 15.00</span>
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
											<span>rs 34.00</span>
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
											<span>rs 34.99</span>
										</div> <!-- End of .text -->
									</div> <!-- End of .best_selling_item -->
								</div> <!-- End of .best_sellers -->


								
	        				</div> <!-- End of .wrapper -->
	        			</div> <!-- End of .sidebar_styleTwo -->
						<?php
						$row=mysql_fetch_assoc($query);

 ?>
	        			<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 product_details">
	        				<div class="wrapper">
	        					<div class="product_top_section clear_fix">
	        						<div class="img_holder float_left">
	        							<img src="images/<?php echo $row['img'] ?>" alt="img" class="img-responsive">
	        						</div> <!-- End of .img_holder -->
	        						<div class="item_description float_left">
	        							<h4>   <?php echo $row['productname'] ?></h4>
	        							<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li>(2 Customers Review)</li>
										</ul>
										<span class="item_price">Rs <?php echo $row['price'] ?> </span>
										<div class="single-item">
										<div class="icon "><i class="icon-nature-1 "></i><a class="name color1" href="seeseller.php?id=<?php echo $row['username'] ?>" >See Seller</a></div>
									</div>
									
										<p> <?php echo $row['desc'] ?></p>
										<span class="check_location">Number of stocks</span>
										<div class="clear_fix">
											<button class="float_left tran3s"><?php echo $row['stock'] ?></button>
										</div>
	        						</div> <!-- End of .item_description -->
	        					</div> <!-- End of .product_top_section -->

	        					<!-- __________________ Product review ___________________ -->
	        					<div class="product-review-tab">
									<ul class="nav nav-pills">
									    <li><a data-toggle="pill" href="#tab1">Description</a></li>
									    <li class="active"><a data-toggle="pill" href="#tab2">Reviews(2)</a></li>
								  	</ul>
								  
									 <div class="tab-content">
									    <div id="tab1" class="tab-pane fade">
									      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years on purpose.</p>
									      <p style="margin-top:10px">Distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors when looking.</p>
									      
									    </div> <!-- End of #tab1 -->

									    <div id="tab2" class="tab-pane fade in active">
									      <!-- Single Review -->
									      <div class="item_review_content clear_fix">
									      	<div class="img_holder float_left">
									      		<img src="images/gallery/a3.jpg" alt="img">
									      	</div> <!-- End of .img_holder -->

									      	<div class="text float_left">
									      		<div class="sec_up clear_fix">
									      			<h6 class="float_left">aleena</h6>
									      			<div class="float_right">
									      				<span class="p_color">21/08/2016 &nbsp;at &nbsp;09.45</span>
									      				<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
														</ul>
									      			</div>
									      		</div> <!-- End of .sec_up -->
									      		<p>good and very cheap</p>

									      		<div class="up_down_nav">
									      			<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									      			<a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									      		</div> <!-- End of .up_down_nav -->

									      		<!-- End of .reply_share_area -->
									      	</div> <!-- End of .text -->
									      </div> <!-- End of .item_review_content -->

									      <!-- Single Review -->
									      <div class="item_review_content clear_fix">
									      	<div class="img_holder float_left">
									      		<img src="images/gallery/a2.jpg" alt="img">
									      	</div> <!-- End of .img_holder -->

									      	<div class="text float_left">
									      		<div class="sec_up clear_fix">
									      			<h6 class="float_left">jiss</h6>
									      			<div class="float_right">
									      				<span class="p_color">26/08/2015 &nbsp;at &nbsp;05.30</span>
									      				<ul>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star" aria-hidden="true"></i></li>
															<li><i class="fa fa-star-half-o" aria-hidden="true"></i></li>
														</ul>
									      			</div>
									      		</div> <!-- End of .sec_up -->
									      		<p>lovely and very quick delivery</p>

									      		<div class="up_down_nav">
									      			<a href="#"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
									      			<a href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
									      		</div> <!-- End of .up_down_nav -->

									      	</div> <!-- End of .text -->
									      </div> <!-- End of .item_review_content -->


									      <div class="add_your_review">
										      	<div class="theme_inner_title">
													<h4>Add Your Review</h4>
												</div>

												<span>Your Rating</span>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<ul class="fix_border">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>

												<form action="#">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<input type="text" placeholder="Name*">
														</div>
														<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
															<input type="email" placeholder="Email*">
														</div>
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<textarea placeholder="Your Review..."></textarea>
														</div>
													</div>
													<button class="color1_bg tran3s">Add A Review</button>
												</form>

									      </div> <!-- End of .add_your_review -->
									      
									    </div> <!-- End of #tab2 -->
									 </div> <!-- End of .tab-content -->
								</div> <!-- End of .product-review-tab -->


								
	        				</div> <!-- End of .wrapper -->
	        			</div> <!-- End of .col -->


	        		</div> <!-- End of .row -->
	        	</div> <!-- End of .container -->
	        </div> <!-- End of .shop_single_page -->


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
		 	


			<!-- Scroll Top Button -->
			<button class="scroll-top tran3s color2_bg">
				<span class="fa fa-angle-up"></span>
			</button>
			<!-- pre loader  -->
		 

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

<!-- Mirrored from steelthemes.com/demo/html/organic_store/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2017 09:08:50 GMT -->
</html>