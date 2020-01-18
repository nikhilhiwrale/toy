
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="default">
	<meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">

	<link rel="icon" href="images/favicon.png">
	<title>Rent-On :Earn Money Rent your Stuff </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="packages/core/css/framework7.bundle.css">
   
        <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
	<link rel="stylesheet" href="mystyle.css">
 <link rel="stylesheet" href="css/bootstrap-datepicker.css">
   <script src="js/jquery.min.js"></script>
        <style>
         .btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    white-space: nowrap;
    padding: 10px 20px;
    font-size: 14px;
    line-height: 2;
    margin-top: -8px;
    margin-left: 0px !important;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.md .page.page-with-subnavbar .navbar-inner {
    overflow: visible;
    color: white;
    background: rgb(0, 170, 138) !important
}

.form-control {
  display: block;
  width: 100%;
  height: 35px !important;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc !important;
  border-radius: 1px !important;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  font-family: 'Roboto', sans-serif;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #999999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999999;
}
.form-control::-webkit-input-placeholder {
  color: #999999;
}

.list .item-content .item-inner .item-title {
    font-size: 14px;
    color: #333;
    margin-left: 33px;
        
}

        </style>
</head>
<body>
	
	<div id="app">

		<div class="view view-main view-init" data-url="/">
			<div class="page page-home page-with-subnavbar page-current">
                            <div class="toolbar tabbar tabbar-labels toolbar-bottom" style="background: rgb(0, 170, 138) !important"> 
                                              <center>  <h4 style="margin-top: 11px; color: white"> 
                                                      <a href="Register.html" class="external link" style="color:white; font-size:16px;    margin-top: -1px; font-family:">
                                                      Earn Money Rent your Stuff </a>
                                                  
                                                  </h4>
                                                      </center>

                                
                            </div>
                            <div class="navbar navbar-home">
							<div class="navbar-inner">
								<div class="left">
									<a href="#" class="panel-open" data-panel="left">
                                                                            <i class="fa fa-bars" style="color:white;"></i>
									</a>
								</div>
								<div class="title">
                                                                    <h2 style="font-family:Cookie;font-size:30px; color:white;"><center>Rent-On <center></h2>
								</div>
                                                            <a href="#tab-search" class="tab-link">
							<i class="fa fa-search" style="color:white;"></i>
						
						</a>
								<div class="right">
                                                                    <a href="/wishlist/" style="display:none;">
										<i class="fa fa-heart"></i>
									</a>
									<a href="/notification/">
                                                                            <i class="fa fa-cart-arrow-down" style="color:white;"></i>
										
									</a>
								</div>
							</div>
						</div>
                            <div class="toolbar tabbar tabbar-labels toolbar-bottom" style="display:none;">
					<div class="toolbar-inner">
						<a href="#tab-home" class="tab-link tab-link-active">
							<i class="fa fa-home"></i>
							<span class="tabbar-label">Home</span>
						</a>
						<a href="#tab-search" class="tab-link">
                                                    <i class="fa fa-search" ></i>
							<span class="tabbar-label">Search</span>
						</a>
						<a href="#tab-brand" class="tab-link">
							R
							<span class="tabbar-label">Rent-On</span>
						</a>
						<a href="#tab-cart" class="tab-link">
							<i class="fa fa-shopping-cart"></i>
							<span class="tabbar-label">Cart</span>
						</a>
						<a href="#tab-account" class="tab-link">
							<i class="fa fa-user"></i>
							<span class="tabbar-label">Account</span>
						</a>
					</div>
				</div>
				<div class="tabs">
					<div id="tab-home" class="tab tab-active tab-home">
						<!-- home -->

						<!-- navbar home -->
          
						
                                                <div class="subnavbar" style="display:none;">
							<div class="searchbar-backdrop"></div>
                                                        <form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
								<div class="searchbar-inner">
									<div class="searchbar-input-wrap">
										<input type="search" placeholder="Search for products for stores">
										<i class="searchbar-icon"></i>
										<span class="input-clear-button"></span>
									</div>
									<span class="searchbar-disable-button">Cancel</span>
								</div>
							</form>
						</div>
						<!-- end navbar home -->

						<!-- sidebarbar or panel -->
						<div class="panel-backdrop"></div>
						<div class="panel panel-left panel-cover sidebar">
							<div class="list accordion-list">
								              <ul id="slide-out" class="sidenav">

                                   
                                                          <li style="background: rgb(0, 170, 138) !important;"><a href="#!">
                                            <div class="item-inner">
                                                <div class="item-title" style="margin-bottom: -8px;"> <font style="color:white;font-size:20px;"> &nbsp; &nbsp;&nbsp;
                                                    <i class="fa fa-user-circle" style="color:white; font-size:30px;"></i> &nbsp;Hello, Nikhil      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <a class="panel-close"> <i class="fa fa-times" style="color:white;"></i> </a>  </font></div></a>
                                        </div>
                                            <hr>
                                    </li>
                                    
                                    
                             

                                    <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Home</div>

                                            </div>
                                        </a></li>
                                     <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Today's Deals</div>

                                            </div>
                                        </a></li>
                                          <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Your Orders</div>

                                            </div>
                                        </a></li>
                                             <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Sign In</div>

                                            </div>
                                        </a></li>
                           <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Your Account</div>

                                            </div>
                                        </a></li>
                                     <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Become a Seller</div>

                                            </div>
                                        </a></li>
                                     <li><a href="index.php" class="external link" style="margin-left: 40px !important; color:black">

                                            <div class="item-inner">
                                                <div class="item-title">Customer Support</div>

                                            </div>
                                        </a></li>
                               
                                  




                                </ul> 
							</div>
						</div>
						<!-- end sidebarbar or panel -->

						<!-- slider -->
                                                
                                        
                                                <div class="slider" style="margin-top:;!important">
							<div class="container" style=''>
								<div data-pagination="{&quot;el&quot;: &quot;.swiper-pagination&quot;}" data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal swiper-container-initialized swiper-container-ios">
									<div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
									<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
										<div class="swiper-slide swiper-slide-active" style="width: 351px; margin-right: 10px;">
											<div class="content">
												<div class="mask"></div>
                                                                                                <img src="images/banner1.png" alt="">
											</div>
										</div>
										<div class="swiper-slide swiper-slide-next" style="width: 351px; margin-right: 10px;">
											<div class="content">
												<div class="mask"></div>
                                                                                                <img src="images/banner2.png">
											</div>
										</div>
										<div class="swiper-slide" style="width: 351px; margin-right: 10px;">
											<div class="content">
												<div class="mask"></div>
												<img src="images/banner3.png" alt="">
											</div>
										</div>
									</div>
								<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
							</div>
						</div>
						<!-- end slider -->

						<!-- cateogries -->
                                                <div class="categories segments" style="display:none;">
							<div class="container">
								<div class="row">
									<div class="col-20">
										<div class="content">
											<a href="/all-categories/">
												<div class="icon">
													<i class="fa fa-th"></i>
												</div>
												<span>Show All</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-tshirt"></i>
												</div>
												<span>Apparel</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-chair"></i>
												</div>
												<span>Furniture</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-camera"></i>
												</div>
												<span>Photo</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-headphones-alt"></i>
												</div>
												<span>Accessories</span>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-mobile-alt"></i>
												</div>
												<span>Handphone</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-basketball-ball"></i>
												</div>
												<span>Sports</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-pizza-slice"></i>
												</div>
												<span>Food</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-plug"></i>
												</div>
												<span>Electronic</span>
											</a>
										</div>
									</div>
									<div class="col-20">
										<div class="content">
											<a href="/categories-details/">
												<div class="icon">
													<i class="fa fa-car"></i>
												</div>
												<span>Automotive</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end cateogries -->

						<!-- flash sale -->
                                                <br><br>
						<div class="flash-sale segments no-pd-b">
							<div class="container">
								<div class="section-title flash-s-title">
									<h3>Browse Fashion by Category</h3>
									<div data-space-between="10" data-slides-per-view="auto" class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal swiper-container-ios">
										<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
											<div class="swiper-slide swiper-slide-active" style="margin-right: 10px;">
												<div class="content content-shadow-product">
                                                                                                    <a  class="link external"  href="product-details_1.php">
                                                                                                     
                                                                                                        <div class="product-mark-discount"style="display:none;">
															<ul>
																<li>50%</li>
																<li>OFF</li>
															</ul>
														</div>
                                                                                                            <img src="images/item-7.jpg" alt="flash-sale" style="width:">
                                                                                                    </a>
                                                                                                    
														<div class="text">
															<p>Women</p>
														</div>
													
												</div>
											</div>
											<div class="swiper-slide swiper-slide-next" style="margin-right: 10px;">
												<div class="content content-shadow-product">
													<a href="/product-details/">
														                                                                                                            <img src="images/item-10.jpg" style="width:75px;" alt="flash-sale" style="">
														<div class="text">
															<p>Mens</p>
														</div>
													</a>
												</div>
											</div>
											
											<div class="swiper-slide" style="margin-right: 10px;">
												<div class="content content-shadow-product">
													<a href="/product-details/">
                                                                                                            <div class="product-mark-discount" style="display:none;">
															<ul>
																<li>50%</li>
																<li>OFF</li>
															</ul>
														</div>
                                                                                                            <img src="images/item-13.jpg" style="width:75px;" alt="flash-sale" style="">
														<div class="text">
															<p>Kids</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
								</div>
							</div>
						</div>
						<!-- end flash sale -->

						<!-- popular product -->
                                                
                                                <style>
                                                    
                                                    .img{
                                                        
                                                        height:200px !important;
                                                        width:120px !important;
                                                        text-align-center;
                                                    }
                                                    </style>
						<div class="popular-product segments-bottom">
							<div class="container">
								<div class="section-title">
									<h3>Popular Product
										<a href="#" class="see-all-link">See All</a>
									</h3>
								</div>
								<div data-pagination="{&quot;el&quot;: &quot;.swiper-pagination&quot;}" data-space-between="10" data-slides-per-view="3" class="swiper-container swiper-init swiper-container-initialized swiper-container-horizontal swiper-container-ios">
									<div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
									<div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
										<div class="swiper-slide swiper-slide-active" style="width: 110.333px; margin-right: 10px;">
											<div class="content content-shadow-product">
												<a href="/product-details/">
                                                                                                    <Center><img src="images/image1.jpg" alt="product" class="img"> </Center>
													<div class="text">
														<p class="title-product">Veirdo Men's Cotton Round Neck T-Shirt</p>
														<p class="price">₹850.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide swiper-slide-next" style="width: 110.333px; margin-right: 10px;">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													 <Center><img src="images/image2.jpg" alt="product" class="img">
													<div class="text">
														<p class="title-product">SHAUN Women Sweatshirt an jeans</p>
														<p class="price">₹660.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide" style="width: 110.333px; margin-right: 10px;">
											<div class="content content-shadow-product">
												<a href="/product-details/">
                                                                                                     <Center><img src="images/image3.jpg" style="max-width: 100%;" alt="product" class="img">
													<div class="text">
														<p class="title-product">69 Gal Women's Round Neck Sweatshirt</p>
														<p class="price">₹800.99</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide" style="width: 110.333px; margin-right: 10px;">
											<div class="content content-shadow-product">
												<a href="/product-details/">
                                                                                                     <Center><img src="images/image4.jpg" alt="product">
													<div class="text">
														<p class="title-product">Austin Wood Striper Men's Polo Neck Tshirt</p>
														<p class="price">₹490.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="swiper-slide" style="width: 110.333px; margin-right: 10px;">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													 <Center><img src="images/image6.jpg" alt="product">
													<div class="text">
                                                                                                            <p class="title-product">SHAUN Men's Solid T-Shirt <br></p>
														<p class="price">₹500.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
							</div>
						</div>
						<!-- end popular product -->

						<!-- recommended -->
						<div class="recommended product segments-bottom">
							<div class="container">
								<div class="section-title">
									<h3>Recommended For You
										<a href="#" class="see-all-link">See All</a>
									</h3>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
                                                                                             <Center><img src="images/image7.jpg" alt="product" class="img">
												<div class="text">
													<p class="title-product">Cheap elegant sweater with collar</p>
													<p class="price">₹80.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
                                                                                             <Center><img src="images/image8.jpg" alt="product" class="img">
												<div class="text">
													<p class="title-product">Responsive mouse just fits in your hand</p>
													<p class="price">₹59.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
                                                                                             <Center><img src="images/image9.jpg" alt="product" class="img">
												<div class="text">
													<p class="title-product">Loafers with genuine leather, guaranteed</p>
													<p class="price">₹299.99</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
									<div class="col-50">
										<div class="content content-shadow-product">
											<a href="/product-details/">
                                                                                             <Center><img src="images/image10.jpg" alt="product" class="img">
												<div class="text">
													<p class="title-product">Long-sleeved gray sweater, soft material</p>
													<p class="price">₹90.00</p>
													<p class="location">New York</p>
												</div>
											</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<!-- end recommended -->

						<!-- end home -->
					</div>
					<div id="tab-search" class="tab tab-search">
						<!-- search -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
                                                            <div class="left" style="display:none;"></div>
                                                                <div class="title" style="">
									RENT-ON
								</div>
                                                            
								<div class="right"></div>
							</div>
						</div>

						<div class="subnavbar">
							<form class="searchbar searchbar-init" data-search-container=".search-list" data-search-in=".item-title">
								<div class="searchbar-inner">
									<div class="searchbar-input-wrap">
										<input type="search" placeholder="Search for products for stores">
										<i class="searchbar-icon"></i>
										<span class="input-clear-button"></span>
									</div>
									<span class="searchbar-disable-button">Cancel</span>
								</div>
							</form>
						</div>

						<!-- end navbar -->

						<div class="search segments">
							<div class="container">
								<div class="title-search-category">
									<span>RECENT SEARCH <a href="#">Clear</a></span>
								</div>
								<div class="recent-search">
									<ul>
										<li><a href="#"><i class="fa fa-history"></i>Laptop accessories</a></li>
										<li><a href="#"><i class="fa fa-history"></i>Plain shirt</a></li>
										<li><a href="#"><i class="fa fa-history"></i>Gaming Mouse</a></li>
										<li><a href="#"><i class="fa fa-history"></i>Mechanical Keyboard</a></li>
									</ul>
								</div>

								<!-- divider -->
								<div class="divider-line-half"></div>
								<!-- end divider -->

								<div class="title-search-category">
									<span>POPULAR CATEGORIES</span>
								</div>
								<div class="popular-search">
									<ul>
										<li><a href="#">Laptop</a></li>
										<li><a href="#">Smartphones</a></li>
										<li><a href="#">Earphones</a></li>
										<li><a href="#">Mouse</a></li>
										<li><a href="#">Shirt</a></li>
										<li><a href="#">Keyboard</a></li>
										<li><a href="#">Bottle</a></li>
									</ul>
								</div>

								<!-- divider -->
								<div class="divider-line-half line-search"></div>
								<!-- end divider -->

								<div class="title-search-category">
									<span>RECOMMENDED <a href="#">Refresh</a></span>
								</div>
								<div class="recent-search recommended-search">
									<ul>
										<li><a href="#">Laptop accessories</a></li>
										<li><a href="#">Plain shirt</a></li>
										<li><a href="#">Gaming Mouse</a></li>
										<li><a href="#">Mechanical Keyboard</a></li>
									</ul>
								</div>
							</div>
						</div>

						<!-- end search -->
					</div>
					<div id="tab-brand" class="page-content tab">
						<!-- official brand -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Official Brand
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<div class="official-brand">
							<div class="container">

								<!-- slider brand -->
								<div class="slider-brand segments-bottom">
									<div data-pagination="{&quot;el&quot;: &quot;.swiper-pagination&quot;}" data-space-between="10" class="swiper-container swiper-init swiper-container-horizontal swiper-container-initialized swiper-container-ios">
										<div class="swiper-pagination swiper-pagination-bullets"></div>
										<div class="swiper-wrapper" style="transition-duration: 0ms;">
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="images/banner4.png" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="images/banner5.png" alt="">
												</div>
											</div>
											<div class="swiper-slide">
												<div class="content">
													<div class="mask"></div>
													<img src="images/banner6.png" alt="">
												</div>
											</div>
										</div>
									<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
								</div>
								<!-- end slider brand -->

								<!-- popular brand -->
								<div class="popular-brand segments-bottom">
									<div class="section-title">
										<h3>Populars Brand <a href="#" class="see-all-link">See All</a></h3>
									</div>
									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/trip.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/wobag.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/john.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/alya.png" alt=""></a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/green.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/zona.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/beauty.png" alt=""></a>
											</div>
										</div>
										<div class="col-25">
											<div class="content">
												<a href="#"><img src="images/fitbro.png" alt=""></a>
											</div>
										</div>
									</div>
								</div>
								<!-- end popular brand -->

								<!-- brand promo -->
								<div class="brand-promo segments-bottom product">
									<div class="section-title">
										<h3>Brand Promo Specials <a href="#" class="see-all-link">See All</a></h3>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product1.jpg" alt="">
													<div class="text">
														<p class="title-product">Sweater with high quality misty-fabric</p>
														<p class="price">₹85.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product3.jpg" alt="">
													<div class="text">
														<p class="title-product">Jacket - original parachute material</p>
														<p class="price">₹199.99</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product5.jpg" alt="">
													<div class="text">
														<p class="title-product">Long sleeve black shirt - comfortable</p>
														<p class="price">₹90.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product6.jpg" alt="">
													<div class="text">
														<p class="title-product">Long-sleeved brown sweater, soft material</p>
														<p class="price">₹50.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product9.jpg" alt="">
													<div class="text">
														<p class="title-product">Long-sleeved gray Sweater, soft material</p>
														<p class="price">₹77.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-50">
											<div class="content content-shadow-product">
												<a href="/product-details/">
													<div class="product-mark-discount">
														<ul>
															<li>50%</li>
															<li>OFF</li>
														</ul>
													</div>
													<img src="images/product10.jpg" alt="">
													<div class="text">
														<p class="title-product">Thick jacket suitable for winter - free hat</p>
														<p class="price">₹110.00</p>
														<p class="location">New York</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<!-- end brand promo -->

							</div>
						</div>
						<!-- end official brand -->
					</div>
					<div id="tab-cart" class="page-content tab">
						<!-- cart -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Shopping Cart
								</div>
								<div class="right"></div>
							</div>
						</div>
						<!-- end navbar -->

						<!-- content cart -->
						<div class="cart segments">
							<div class="container">
								<div class="name-store">
									<img src="images/user-seller1.png" alt="">
									<div class="title-store">
										<h6>ABC Shoes Store</h6>
									</div>
								</div>
								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-90">
											<div class="content-cart content-shadow-product">
												<img src="images/product8.jpg" alt="">
												<div class="product-info">
													<a href="#"><p class="title-product">Loafers with genuine leather</p></a>
													<p class="price">₹50.00</p>
												</div>
												<div class="number-goods">
													<div class="stepper stepper-small stepper-init">
														<div class="stepper-button-minus"></div>
														<div class="stepper-input-wrap">
															<input type="text" value="0" readonly="">
														</div>
														<div class="stepper-button-plus"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-90">
											<div class="content-cart content-shadow-product">
												<img src="images/product12.jpg" alt="">
												<div class="product-info">
													<a href="#"><p class="title-product">The latest brand of loafers</p></a>
													<p class="price">₹50.00</p>
												</div>
												<div class="number-goods">
													<div class="stepper stepper-small stepper-init">
														<div class="stepper-button-minus"></div>
														<div class="stepper-input-wrap">
															<input type="text" value="0" readonly="">
														</div>
														<div class="stepper-button-plus"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- divider line half -->
								<div class="divider-line-half"></div>
								<!-- end divider line half -->

								<div class="name-store">
									<img src="images/user-seller2.png" alt="">
									<div class="title-store">
										<h6>Shirt Mart</h6>
									</div>
								</div>
								<div class="content">
									<div class="row">
										<div class="col-10">
											<div class="content-checkbox">
												<label class="checkbox">
													<input type="checkbox">
													<i class="icon-checkbox"></i>
												</label>
											</div>
										</div>
										<div class="col-90">
											<div class="content-cart content-shadow-product">
												<img src="images/flash-sale1.jpg" alt="">
												<div class="product-info">
													<a href="#"><p class="title-product">Cheap, plain t-shirts</p></a>
													<p class="price">₹50.00</p>
												</div>
												<div class="number-goods">
													<div class="stepper stepper-small stepper-init">
														<div class="stepper-button-minus"></div>
														<div class="stepper-input-wrap">
															<input type="text" value="0" readonly="">
														</div>
														<div class="stepper-button-plus"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- divider line full -->
							<div class="divider-line-full"></div>
							<!-- end divider line full -->

							<!-- wrap total cart -->
							<div class="wrap-total-cart">
								<div class="container">
									<div class="row">
										<div class="col-40">
											<div class="content-total">
												<p>Total</p>
												<h6>₹150</h6>
											</div>
										</div>
										<div class="col-60">
											<div class="content-button">
												<a href="/checkout/" class="button primary-button"><i class="fa fa-shopping-bag"></i>Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end wrap total cart -->
						</div>
						<!-- end content cart -->

						<!-- end cart -->
					</div>
					<div id="tab-account" class="page-content tab">
						<!-- account buyer -->

						<!-- navbar -->
						<div class="navbar navbar-page">
							<div class="navbar-inner">
								<div class="left"></div>
								<div class="title">
									Account Buyer
								</div>
								<div class="right">
									<a href="/settings/">
										<i class="fa fa-cog"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- end navbar -->

						<!-- content account -->
						<div class="account-buyer segments">
							<div class="container">
								<div class="header-account content-shadow">
									<img src="images/user-buyer6.png" alt="">
									<div class="title-name">
										<h5>Airy Fashion</h5>
										<p><i class="fa fa-map-marker-alt"></i>Washington</p>
									</div>
								</div>
							</div>
							<div class="container segments">
								<div class="info-balance content-shadow">
									<div class="row">
										<div class="col-50">
											<div class="content-text">
												<p>Your Balance</p>
												<h5>₹310.00</h5>
											</div>
										</div>
										<div class="col-50">
											<div class="content-button">
												<a href="#" class="button primary-button"><i class="fa fa-wallet"></i>Top Up</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="account-menu">
								<div class="list media-list">
									<ul>
										<li>
											<a href="/wishlist/" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-heart"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Wishlist</div>
													</div>
													<div class="item-subtitle">All products that you have saved</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/transaction/" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-exchange-alt"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Transaction</div>
													</div>
													<div class="item-subtitle">All your transactions are here</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/notification/" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-bell"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Notification</div>
													</div>
													<div class="item-subtitle">Transaction, Purchase, Notification update</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/faq/" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-question"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Help</div>
													</div>
													<div class="item-subtitle">Need Help, Frequently Asked Questions</div>
												</div>
											</a>
										</li>
										<li>
											<a href="/contact-seller/" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-envelope"></i>
												</div>
												<div class="item-inner">
													<div class="item-title-row">
														<div class="item-title">Contact Seller</div>
													</div>
													<div class="item-subtitle">Other questions can contact me</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#" class="item-link item-content">
												<div class="item-media">
													<i class="fa fa-power-off"></i>
												</div>
												<div class="item-inner">
													<div class="item-title">Logout</div>
                                                                                                      
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- end  content account -->

						<!-- end account buyer -->
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- jQuery Easing -->

    <script src="packages/core/js/framework7.bundle.min.js"></script>
    <script src="js/routes.js">

        </script>
        
	<script src="js/app.js"></script>
            <script>
           $('#close').click(function(){
    location.reload();
});
            function close(){
                
                
                  $('#fixed-form-container').hide();
                            $('html, body').css({
    overflow: 'auto',
    height: '100%'
});
            }
      

            document.addEventListener("touchstart", function () {}, false);
            function calculateRent() {
                daysDiff();
                    $('html, body').css({
    overflow: 'hidden',
    height: '100%'
});
                $('#fixed-form-container').fadeIn();
            }

            function daysDiff() {

                var dateTo = new Date($('#date-to').val());
                var dateFrom = new Date($('#date-from').val())

                var Difference_In_Time = dateTo.getTime() - dateFrom.getTime();

                // To calculate the no. of days between two dates
                var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);
                
                var rent=2900 * (Difference_In_Days);
              
                
                var grandTotal = 2900 * (Difference_In_Days)+5000;
        


                $('#days').html(Difference_In_Days);
                

                var fromDate = $('#date-from').val();
                var toDate = $('#date-to').val();

                $('#fromDate').html(fromDate);
                $('#toDate').html(toDate);
                $('#days').html(Difference_In_Days);
                $('#Grand').html('₹'+ grandTotal);
                 $('#Total').html('₹'+ rent);

            }
          
        </script>
       <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Cookie:regular"]
      }
    });
    
</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/main2.js"></script>
     
</body></html>