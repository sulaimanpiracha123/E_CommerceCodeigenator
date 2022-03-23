<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class=""><!--<![endif]-->
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Maxshop - Cart</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="<?php echo base_url().'Assets/images//favicon.ico'?>" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'Assets/images//apple-touch-icon-114x114-precomposed.png'?>">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'Assets/images//apple-touch-icon-72x72-precomposed.png'?>">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'Assets/images//apple-touch-icon-57x57-precomposed.png'?>">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css?family=Arizonia|Crimson+Text:400,400i,600,600i,700,700i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/revolution/css/settings.css'?>">
 
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/revolution/css/layers.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/revolution/css/navigation.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . "Assets/css/plugins.css" ?>">

	<!-- Library - Bootstrap v3.3.5 -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/libraries/lib.css'?>">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/plugins.css'?>">			
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/navigation-menu.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/shortcode.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/style.css'?>">
	
	
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<div class="main-container">
		<!-- Loader -->
		<div id="site-loader" class="load-complete">
			<div class="loader">
				<div class="loader-inner ball-clip-rotate">
					<div></div>
				</div>
			</div>
		</div><!-- Loader /- -->	
		
		<!-- Header -->
		<header class="header-section header-section-1 container-fluid no-padding">
			<!-- Top Header -->
			<div class="top-header top-header1 container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="col-md-7 col-sm-7 col-xs-7 dropdown-bar">
						<h5>Welcome To Max Shop</h5>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="languages" id="language" type="button" class="btn dropdown-toggle">English <span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Danish</a></li>
								<li><a title="German" href="#">German</a></li>
								<li><a title="French" href="#">French</a></li>
							</ul>
						</div>
						<div class="language-dropdown dropdown">
							<button aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" title="currency" id="currency" type="button" class="btn dropdown-toggle">US Dollar<span class="caret"></span></button>
							<ul class="dropdown-menu no-padding">
								<li><a title="Danish" href="#">Usd</a></li>
								<li><a title="German" href="#">Ora</a></li>
								<li><a title="French" href="#">Riyal</a></li>
							</ul>
						</div>
					</div>
					<!-- Social -->
					<div class="col-md-5 col-sm-5 col-xs-5 header-social"> 
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
							<li><a href="#" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</div><!-- Social /- -->
				</div><!-- Container /- -->
			</div><!-- Top Header /- -->
			
			<!-- Middel Header -->
			<div class="middel-header">
				<!-- Container -->
				<div class="container">
					<!-- Logo Block -->
					<div class="col-md-4 col-sm-6 col-xs-12 logo-block">
						<a href="index.html" class="navbar-brand">Max <span>shop</span></a>
					</div><!-- Logo Block /- -->
					<!-- Search Block -->
					<div class="col-md-5 col-sm-6 col-xs-6 search-block">
						<div class="input-group">
							<input class="form-control" placeholder="Search You Wants Here . . ." type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
							</span>
						</div>
					</div><!-- Search Block /- -->
					<!-- Menu Icon -->
					<div class="col-md-3 col-sm-6 col-xs-6 menu-icon">
						<ul class="cart">
							<li>
								<a aria-expanded="true" aria-haspopup="true" data-toggle="dropdown" id="cart" class="btn dropdown-toggle" title="Add To Cart" href="#"><i class="icon icon-ShoppingCart"></i></a>
								<ul class="dropdown-menu no-padding">
									<li class="mini_cart_item">
										<a title="Remove this item" class="remove" href="#">&#215;</a>
										<a href="#" class="shop-thumbnail">
											<img alt="poster_2_up" class="attachment-shop_thumbnail" src="<?php echo base_url().'Assets/images/product-wishlist-1.jpg'?>">Flying Ninja
										</a>
										<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
									</li>
									<li class="mini_cart_item">
										<a title="Remove this item" class="remove" href="#">&#215;</a>
										<a href="#" class="shop-thumbnail">
											<img alt="poster_2_up" class="attachment-shop_thumbnail" src="<?php echo base_url().'Assets/images/product-wishlist-2.jpg'?>">Flying Ninja
										</a>
										<span class="quantity">2 &#215; <span class="amount">Rs.12.00</span></span>
									</li>
									<li class="button">
										<a href="#" title="View Cart">View Cart</a>
										<a href="#" title="Check Out">Check out</a>
									</li>
								</ul>
							</li>
							<li><a href="#" title="Like"><i class="icon icon-Heart"></i></a></li>
							<li><a href="#" title="User"><i class="icon icon-User"></i></a></li>
						</ul>
					</div><!-- Menu Icon /- -->
				</div><!-- Container /- -->
			</div><!-- Middel Header /- -->
			
			<!-- Menu Block -->
			<div class="container-fluid no-padding menu-block">
				<!-- Container -->
				<div class="container">
					<!-- nav -->
					<nav class="navbar navbar-default ow-navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="index.html" class="navbar-brand">Max <span>shop</span></a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="index.html" title="home 1">home 1</a></li>
										<li><a href="index2.html" title="home 2">home 2</a></li>
									</ul>
								</li>
								<li class="active dropdown">
									<a href="#" title="Home" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Categories </a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="cart.html" title="Cart">Cart</a></li>
										<li><a href="checkout.html" title="Checkout">Checkout</a></li>
										<li><a href="404.html" title="404">404</a></li>
									</ul>
								</li>
								<li><a href="index.html#product-section" title="Products">Products</a></li>
								<li class="dropdown">
									<a href="shop.html" title="Shop" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="shop-single.html" title="Shop Single">Shop Single</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="blog.html" title="Blog" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">				
										<li><a href="blog-post.html" title="Blog Post">Blog Post</a></li>
									</ul>
								</li>
								<li><a href="about.html" title="About Us">About Us</a></li>
								<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
							</ul>
						</div><!--/.nav-collapse -->
					</nav><!-- nav /- -->
				</div><!-- Container /- -->
			</div><!-- Menu Block /- -->
		</header><!-- Header /- -->
		
		<main>
			<!-- Page Banner -->
			<div class="page-banner container-fluid no-padding">
				<!-- Container -->
				<div class="container">
					<div class="banner-content">
						<h3>Cart</h3>
						<p>our vision is to be Earth's most customer centric company</p>
					</div>
					<ol class="breadcrumb">
						<li><a href="index.html" title="Home">Home</a></li>							
						<li class="active">Cart</li>
					</ol>
				</div><!-- Container /- -->
			</div><!-- Page Banner /- -->
			<!-- Cart -->
			<div class="woocommerce-cart container-fluid no-left-padding no-right-padding">
				<!-- Container -->
				<div class="container">
					<!-- Cart Table -->
					<div class="col-md-12 col-sm-12 col-xs-12 cart-table">
						<form>
							<table class="table table-bordered table-responsive">
								<thead>
									<tr>
										<th class="product-thumbnail">Item</th>
										<th class="product-name">Product Name</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-unit-price">Unit Price</th>
										<th class="product-subtotal">Total</th>
										<th class="product-remove">Remove</th>
									</tr>
								</thead>
								<tbody>
								    <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){  
										  ?>

									<tr class="cart_item">
										<td data-title="Item" class="product-thumbnail"><a href="#"><img src="<?php echo base_url('upload/Prod_Img/').$item['image']?>" alt="Product" /></a></td>
										<td data-title="Product Name" class="product-name"><?php echo $item['name']?></td>
										<td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item['rowid']; ?>')"></td>

										<td data-title="Unit Price" class="product-unit-price"><?php echo $item['price']?></td>
										<td class="text-right"><?php echo $item["subtotal"]; ?></td>

				<td  class="product-remove"><a href = "<?php echo base_url().'index.php/Cart/removeItem/'.$item['rowid']?>"class="btn btn-sm btn-danger" ></a></td>
	
									</tr>
									<?php }}?>
									<tr>
										<td class="action" colspan="6">
											<a href="<?php echo base_url().'index.php/Front_controller/Shop'?>" title="Continue shopping">Continue shopping</a>
											<a href="#" title="update shopping cart">update shopping cart</a>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div><!-- Cart Table /- -->
					<!-- Coupon -->
					<div class="col-md-offset-4 col-md-4 col-sm-6 col-xs-6 coupon">
						<div class="coupon-box">
							<h4>coupon code</h4>
							<h6>If You Have A Coupon Code Enter Here</h6>
							<form>
								<input type="text" class="form-control" placeholder="Coupon Code" />
								<input type="submit" value="apply code" />
							</form>
						</div>
					</div><!-- Coupon /- -->
					<div class="col-md-4 col-sm-6 col-xs-6 cart-collaterals">
						<div class="cart_totals">
							<h3>cart totals</h3>
							<table>
								<tr>

									<th>Sub Total</th>
									<td class="text-right"><strong><?php echo 'PKR|: '.$this->cart->total(); ?></strong></td>

								</tr>
								<tr>
									<th>Shipping</th>
									<td>Free</td>
								</tr>
								<tr>
									<th>Grand Total</th>
									<td class="text-right"><strong><?php echo 'PKR|: '.$this->cart->total(); ?></strong></td>
								</tr>
							</table>
							<div class="wc-proceed-to-checkout">		
								<a href="<?php echo base_url().'index.php/Checkout'?>" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Cart /- -->
			
		</main>
		
		<!-- Footer Main 1 -->
		<footer id="footer-main" class="footer-main footer-main-1 services-section container-fluid">
			<!-- Container -->
			<div class="container">
				<div class="services-item">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Truck"></i><h5>Free delivery</h5><i class="icon icon-Dollar"></i>
							<span class="icon_close"></span>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Goto"></i><h5>Money Back</h5><i class="icon icon-Dollars"></i>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="srv-box">
							<i class="icon icon-Headset"></i><h5>24/7 support</h5><i class="icon icon-Timer"></i>
						</div>
					</div>
				</div>
				<!-- Widget About -->
				<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_about">
					<a href="index.html" title="Max Shop">Max <span>Shop</span></a>
					<p>On the most sensational inspirational celbrational Muppetational... This is what we call Show. I have always wanted to have a neighbor just like you.</p>
					<ul class="social">
						<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" title="Tumblr"><i class="fa fa-tumblr"></i></a></li>
						<li><a href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a></li>
					</ul>
				</aside><!-- Widget About /- -->
				<!-- Widget Links -->
				<aside class="col-md-2 col-sm-6 col-xs-6 ftr-widget widget_links">
					<h3 class="widget-title">Popular Links</h3>
					<ul>
						<li><a href="index.html#product-section" title="Popular Products">Popular Products</a></li>
						<li><a href="index.html#selling" title="Best Selling">Best Selling</a></li>
						<li><a href="about.html" title="About Us">About Us</a></li>
						<li><a href="index.html#dealing" title="Deal Of The Day">Deal Of The Day</a></li>
						<li><a href="index.html#collection" title="Product Collections">Product Collections</a></li>
						<li><a href="contact-us.html" title="Contact Us">Contact Us</a></li>
					</ul>
				</aside><!-- Widget Links /- -->
				<!-- Widget Account -->
				<aside class="col-md-3 col-sm-6 col-xs-6 ftr-widget widget_links widget_account">
					<h3 class="widget-title">my account</h3>
					<ul>
						<li><a href="#" title="My Order Details">My Order Details</a></li>
						<li><a href="#" title="My credit Offers">My credit Offers</a></li>
						<li><a href="#" title="My addresses">My addresses</a></li>
						<li><a href="#" title="My Personal Details">My Personal Details</a></li>
						<li><a href="#" title="My Account Details">My Account Details</a></li>
					</ul>
				</aside><!-- Widget Account /- -->
				<!-- Widget Gallery -->
				<aside class="col-md-4 col-sm-6 col-xs-6 ftr-widget widget_gallery">
					<h3 class="widget-title">collections</h3>
					<ul>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-1.jpg"?>" alt="ftr-latestpost"></a></li>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-2.jpg"?>" alt="ftr-latestpost"></a></li>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-3.jpg"?>" alt="ftr-latestpost"></a></li>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-4.jpg"?>" alt="ftr-latestpost"></a></li>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-5.jpg"?>" alt="ftr-latestpost"></a></li>
						<li><a href="#" title=""><img src="<?php echo base_url() ."Assets/images/ftr-latestpost-6.jpg"?>" alt="ftr-latestpost"></a></li>
					</ul>
				</aside><!-- Widget Gallery -->
				<div class="copyright-section">
					<div class="coyright-content">
						<p>&copy; Max shop. all rights reserved</p>
					</div>	
					<ul>
						<li><a href="#" title="Delivery Information">Delivery Information</a></li>
						<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
						<li><a href="#" title="Terms & Condition">Terms & Condition</a></li>
					</ul>
				</div>
			</div><!-- Container /- -->
		</footer><!-- Footer Main 1 -->

	</div>
	
	<!-- JQuery v1.12.4 -->
	<script src="<?php echo base_url().'Assets/js/jquery.min.js'?>"></script>

	<!-- Library - Js -->
	<script src="<?php echo base_url().'Assets/libraries/lib.js'?>"></script>
	
	<script src="<?php echo base_url().'Assets/libraries/jquery.countdown.min.js'?>"></script>
	
	<!-- RS5.0 Core JS Files -->
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/extensions/revolution.extension.video.min.js"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/extensions/revolution.extension.slideanims.min.js"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."Assets/revolution/js/extensions/revolution.extension.navigation.min.js"?>"></script>
	
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>

	<!-- Library - Theme JS -->
	<script src="<?php echo base_url().'Assets/js/functions.js'?>"></script>
	
</body>
</html>
	
