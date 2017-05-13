<!DOCTYPE html>
<html lang="en">
	<?php session_start(); 
	include_once('../config.php');

	$sql="SELECT * FROM product";
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
					      <li class="current_page"><a href="index.php">Home</a></li>
					      <li><a href="about-us.html">About us</a></li>
					      <li><a href="shop.php">Store</a></li>
					      <li><a href="seed.php">Seeds</a></li>
					       <li><a href="news.php">gov policies</a></li>
						   <li><a href="sell.php">SELL</a></li>
					      <li><a href="contact.html">Contact us</a></li>
					   </ul> <!-- End of .menuzord-menu -->
				   </nav> <!-- End of #main_menu -->


				   <!-- ******* Cart And Search Option ******** -->
				  
				     
			   </div> <!-- End of .conatiner -->
			</div> <!-- End of .theme_menu -->




			<!-- Banner ____________________________________ -->
	        <div id="banner">
	        	<div class="rev_slider_wrapper">
					<!-- START REVOLUTION SLIDER 5.0 auto mode -->
						<div id="main_slider" class="rev_slider" data-version="5.0">
							<ul>
								
								<!-- SLIDE1  -->
								<li data-index='rs-377' data-transition='curtain-1' data-slotamount='1' data-easein='default' data-easeout='default' data-masterspeed='default' data-thumb='images/home/slide-1.jpg' data-rotate='0' data-saveperformance='off' data-title='Business Solutions' data-description='' >
									<!-- MAIN IMAGE -->
									<img src="images/home/slide-1.jpg"  alt="image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
									<!-- LAYERS -->

									<!-- LAYER NR. 2 -->
									<div class="tp-caption tp-resizeme rs-parallaxlevel-3" 
										data-x="['center','center','center','center']" data-hoffset="['0','0','35','0']" 
										data-y="['middle','middle','middle','middle']" data-voffset="['50','50','50','50']"
										data-width="none"
										data-height="none"
										data-transform_idle="o:1;"
										data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
										data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
										data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
										data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
										data-start="1500"
										data-splitout="none" 
										data-responsive_offset="on" 
										data-elementdelay="0.05" 
										style="z-index: 5;">
										<img src="images/home/1.png" alt="">
									</div>


									



			
								
								</li>



								
					</div><!-- END REVOLUTION SLIDER -->
	        </div> <!-- End of #banner -->

<!-- Request Quote ******************************* -->
			<section class="why_choose_us">
				<div class="theme_title_bg" style="background-image: url(images/background/1.jpg);">
					<div class="theme_title center">
						<div class="container">
							<h2>Why to Choose Us</h2>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered <br>alteration in some form, by injected humour.</p>
							
						</div>
					</div>
					
				</div>
				
				<div class="container">
					 <!-- End of .theme_title_center -->

					<div class="row">

						<!-- ______________ Item _____________ -->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="choose_us_item tran3s">
								<div class="icon p_color_bg border_round float_left"><span class="ficon icon-fruit-1"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<h5 class="tran3s">100% Organic Products</h5>
									<p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .choose_us_item -->
						</div> <!-- End of .col -->

						<!-- ______________ Item _____________ -->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="choose_us_item tran3s">
								<div class="icon p_color_bg border_round float_left"><span class="ficon icon-wheat"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<h5 class="tran3s">Any Time, Anywhere Delivery</h5>
									<p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .choose_us_item -->
						</div> <!-- End of .col -->

						<!-- ______________ Item _____________ -->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="choose_us_item tran3s">
								<div class="icon p_color_bg border_round float_left"><span class="ficon icon-food-2"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<h5 class="tran3s">Keeps Your Family Healthy</h5>
									<p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .choose_us_item -->
						</div> <!-- End of .col -->

						<!-- ______________ Item _____________ -->
						<div class="col-md-6 col-sm-12 col-xs-12">
							<div class="choose_us_item tran3s">
								<div class="icon p_color_bg border_round float_left"><span class="ficon icon-fruit"></span></div> <!-- End of .icon -->
								<div class="text float_left">
									<h5 class="tran3s">Clean, Fresh and Safety</h5>
									<p class="tran3s">Duis aute irure dolor in reprehenderit voluptate velit esse seds cillum dolore eu fugiat nulla pariatur excepteur sint occaecat.</p>
								</div> <!-- End of .text -->
								<div class="clear_fix"></div>
							</div> <!-- End of .choose_us_item -->
						</div> <!-- End of .col -->
					</div>
				</div> <!-- End of .container -->
			</section> <!-- End of why chooreus -->



			


			    <!--feature Section-->
		    <section class="featured-product">
		        <div class="container">

		            <div class="theme_title center">
		                <h3>FEATURED PRODUCTS</h3>
		            </div>

		            <!--Filter-->
		              <div class="filters text-center">
		                <ul class="filter-tabs filter-btns clearfix">
		                    <li class="filter active" data-role="button" data-filter="all"><span class="txt">All Products</span></li>
		                    <li class="filter" data-role="button" data-filter=".Fruit"><span class="txt">fruits</span></li>
		                    <li class="filter" data-role="button" data-filter=".vegetable"><span class="txt">vegetables</span></li>
		                    <li class="filter" data-role="button" data-filter=".others"><span class="txt">others</span></li>
		                </ul>
		            </div>


		            <div class="row filter-list clearfix" id="MixItUp717B05">
			            

			          			          
		<?php while ($row = mysql_fetch_assoc($query)) { ?>

			            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix mix_all default-item all <?php echo $row['category'] ?>" style="display: inline-block;">
			                <div class="inner-box">
			                    <div class="single-item center">x
			                        <figure class="image-box"><img src="images/<?php echo $row['img'] ?>" alt=""><div class="product-model new">New</div></figure>
			                        <div class="content">
			                        	<h3><a href="shop-single.html"><?php echo $row['productname'] ?></a></h3>
			                            <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			                            <div class="price">rs <?php echo $row['price'] ?> </div>
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
				                        		<h4><a href="shop-single.php?id=<?php echo $row['productname'] ?>">description		</a></h4>
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
			        
		    </section><!-- End of section -->
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

<!-- Mirrored from steelthemes.com/demo/html/organic_store/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Mar 2017 09:01:54 GMT -->
</html>