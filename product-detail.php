<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Store Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <style>

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: grey;
                color: white;

                text-align: center;
            }
            #colorlib-hero {
                height: 650px;
                background: #fff url(../images/loader.gif) no-repeat center center;
                width: 100%;
                float: left;
                z-index: 0;
                margin-bottom: 3px !important;
            }

            .booking-form {
                margin: 50px auto;
                background: white;
                padding: 30px 0;
                position: relative;
                -webkit-box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.125);
                box-shadow: 0 0 0px 0px rgba(0, 0, 0, 0.0) !important;
            }
            .booking-form {
                width: 320px;
                margin-top: -20px !important;
                float: left !important;
            }
            .product-detail-wrap .desc {
                display: block;
                padding-left: 0 !important ;
            }


            .product-detail-wrap .form-control {
                border: 1px solid #e6e6e6;
                text-align: left !important;
                height: 40px;
                font-weight: 400;
                margin-top: -10px !important;
            }
            .booking-form .group > div {
                padding: 0 !important;
            }

            .owl-carousel{
                -ms-touch-action: pan-y;
                touch-action: pan-y;
            }
            .form-control{
                width:100% !important;
                border: !important
            }
            table > thead > tr > th, .table > thead > tr > td, .table > tbody > tr > th, .table > tbody > tr > td, .table > tfoot > tr > th, .table > tfoot > tr > td {

              
                padding: 10px !important;
                    color: #000;
    font-family: "Roboto", Arial, sans-serif;
    font-weight: 400;
    margin: 0 0 20px 0;
    font-size: 15px;
    border: none !important;
                
            }

            .booking-form .group.active {
                background: white !important;
                border-left-color: white !important;
                -webkit-box-shadow: inset 0px 0px 3px rgba(0, 0, 0, 0.03);
                /* box-shadow: inset 0px 0px 3px rgba(0, 0, 0, 0.03); */
            }
            body
            {
                overflow-x: hidden !important;
                width:100%;
            }
.product-detail-wrap .btn {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    -ms-border-radius: 0;
    border-radius: 0;
    height: 40px;
    display: table;
    text-align: -webkit-auto !important;
}
.btn{
    
    padding: 0 px !important;
}
input[type="text"] {
    height: 50px !important;
}
        </style>
        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize2.css">
        <link rel="stylesheet" href="css/main2.css">
        <!-- Magnific Popup -->
        <link rel="stylesheet" href="css/magnific-popup.css">

        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">

        <!-- Date Picker -->
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <style>
 .modal-dialog {
   position:fixed !important;
   top:auto !important;
   right:auto !important;
   left:auto !important;
   bottom:0 !important;
} 
        </style>
        <div class="colorlib-loader"></div>
        <?php include 'Head.php' ?>


        <aside id="colorlib-hero" class="breadcrumbs" style="display:none;">
            <div class="flexslider">
                <ul class="slides">
                    <li style="background-image: url(images/cover-img-1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h1>Product Detail</h1>
                                        <h2 class="bread"><span><a href="index.html">Home</a></span> <span><a href="shop.html">Product</a></span> <span>Product Detail</span></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="colorlib-shop" style="margin-top:-40px;" >
            <div class="container">
                <div class="row">


                    <div class="col-sm-12" style='overflow-x: hidden !important'>
                        <div class="product-detail-wrap" style='overflow-x: hidden !important'>



                            <div class="row" style='overflow-x: hidden !important'>
                                <div class="col-md-5">
                                    <h4>The Dry State Women's T-Shirt </h4>
                                    <span class="rate text-right">
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-half"></i>
                                        (74 Rating)
                                    </span>
                                    <div class="product-entry">
 
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="product-img" style="background-image: url(images/item-7.jpg);">
                                            <p class="tag"><span class="sale">Sale</span></p>
                                        </div>
                                        <div class="thumb-nail">
                                            <a href="#" class="thumb-img" style="background-image: url(images/item-11.jpg);"></a>
                                            <a href="#" class="thumb-img" style="background-image: url(images/item-12.jpg);"></a>
                                            <a href="#" class="thumb-img" style="background-image: url(images/item-16.jpg);"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="desc">

                                        <p class="price">
                                            <span> <font size="5" style="color:red;">₹ 2,900 </font> (per day)  </span><br>  
                                            <font size='3'  style="color:cornflowerblue"><b>Deposit: ₹5000 </b> </font>
                                            <br>
                                            <font size='3' style="color:Black"> Check availability on required date </font>
                                            <br>         


                                            <?php include 'date/date.php'; ?>

                                        </p>
                                        <p style="display:none;">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                        <div class="color-wrap" style="display:none;">
                                            <p class="color-desc">
                                                Color: 
                                                <a href="#" class="color color-1"></a>
                                                <a href="#" class="color color-2"></a>
                                                <a href="#" class="color color-3"></a>
                                                <a href="#" class="color color-4"></a>
                                                <a href="#" class="color color-5"></a>
                                            </p>
                                        </div>
                                        <div class="size-wrap" style="display:none;">
                                            <p class="size-desc">
                                                Size: 
                                                <a href="#" class="size size-1">xs</a>
                                                <a href="#" class="size size-2">s</a>
                                                <a href="#" class="size size-3">m</a>
                                                <a href="#" class="size size-4">l</a>
                                                <a href="#" class="size size-5">xl</a>
                                                <a href="#" class="size size-5">xxl</a>
                                            </p>
                                        </div>






                                         <a href="#"  onclick="calculateRent();" class="btn btn-warning btn-block btn-addtocart">
                                             <center> Rent Now </center></a> 
                                     
                                      <a href="cart.html" class="btn btn-danger btn-block btn-addtocart">
                                          <center> Add to Cart </center></a>
                                               
                                                

                                    </div>
                                </div>
                            </div>









                        </div>
                    </div>










                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                                &nbsp;&nbsp;<div class="col-md-12 tabulation">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#description">Description</a></li>
                                        <li><a data-toggle="tab" href="#manufacturer">Manufacturer</a></li>
                                        <li><a data-toggle="tab" href="#review">Reviews</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="description" class="tab-pane fade in active">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                            <ul>
                                                <li>The Big Oxmox advised her not to do so</li>
                                                <li>Because there were thousands of bad Commas</li>
                                                <li>Wild Question Marks and devious Semikoli</li>
                                                <li>She packed her seven versalia</li>
                                                <li>tial into the belt and made herself on the way.</li>
                                            </ul>
                                        </div>
                                        <div id="manufacturer" class="tab-pane fade">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>

                                        </div>
                                        <div id="review" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <h3>23 Reviews</h3>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person2.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person3.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-md-push-1">
                                                    <div class="rating-wrap">
                                                        <h3>Give a Review</h3>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                (98%)
                                                            </span>
                                                            <span>20 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (85%)
                                                            </span>
                                                            <span>10 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>5 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                        <p class="star">
                                                            <span>
                                                                <i class="icon-star-full"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                                (98%)
                                                            </span>
                                                            <span>0 Reviews</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                            <h2><span>Similar Products</span></h2>
                            <p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-5.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>$300.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-6.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>$300.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-7.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>$300.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-8.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.html"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>$300.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="colorlib-subscribe">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="col-md-6 text-center">
                                <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
                            </div>
                            <div class="col-md-6">
                                <form class="form-inline qbstp-header-subscribe">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-0">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" placeholder="Enter your email">
                                                <button type="submit" class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer id="colorlib-footer" role="contentinfo">
                <div class="container">
                    <div class="row row-pb-md">
                        <div class="col-md-3 colorlib-widget">
                            <h4>About Store</h4>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                            <p>
                            <ul class="colorlib-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Customer Care</h4>
                            <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Returns/Exchange</a></li>
                                <li><a href="#">Gift Voucher</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Special</a></li>
                                <li><a href="#">Customer Services</a></li>
                                <li><a href="#">Site maps</a></li>
                            </ul>
                            </p>
                        </div>
                        <div class="col-md-2 colorlib-widget">
                            <h4>Information</h4>
                            <p>
                            <ul class="colorlib-footer-links">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Delivery Information</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                            </p>
                        </div>

                        <div class="col-md-2">
                            <h4>News</h4>
                            <ul class="colorlib-footer-links">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Press</a></li>
                                <li><a href="#">Exhibitions</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <h4>Contact Information</h4>
                            <ul class="colorlib-footer-links">
                                <li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
                                <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                                <li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><a href="#">yoursite.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="copy">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p>

                                <span class="block"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span> 
                                <span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!----<div class="modal" tabindex="-1" role="dialog" id="rentModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-body" style="width:100% !important">
                        <h3>Order Summary :</h3>
                        <table class="table table-bordered">
                            <tr>
                                <th>Item Name </th>
                                <td colspan="3">The Dry State Women's T-Shirt</td>                
                            </tr>
                            <tr>
                                <th>Size </th>
                                <td>XL</td>
                                <th>Waist :</th>
                                <td>30</td>                   
                            </tr>
                            <tr>
                                <th>From Date </th>
                                <td><font id="fromDate">10/10/2019</font></td>   
                                <th>Return  Date </th>
                                <td><font id="toDate">15/10/2019</font></td> 
                            </tr>
                            <tr>
                                <th>Rent/day :</th>
                                <td>₹ 2,900</td>   
                                <th>Days</th>
                                <td><font id="days">6</font></td> 
                            </tr>
                             <tr>
                                <th>Rent :</th>
                                <td><font id="Total"></td>  
                                <th></th>
                                <th></th>
                            </tr>
                             <tr>
                                <th>Deposit :</th>
                                <td>₹ 5,000</td>  
                                <th></th>
                                <th></th>
                            </tr>
                            
                            <tr>
                                <th>Grand Total</th>
                                <td colspan="3" style="color:red;"><font id="Grand"></td>   

                            </tr>

                        </table>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Confirm Purchase</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> !----->
        
        
        
        
   

        <style>
            

#fixed-form-container{
    position: fixed;
    overflow-y: hidden;
    bottom: 0px;
    width: 100%;
    text-align: center;
    margin: 0;

}

#fixed-form-container .button:before { 
   content: "+ ";
}

#fixed-form-container .expanded:before { 
    content: "- ";
}

#fixed-form-container .button { 
  font-size:1.1em; 
	cursor: pointer;
	margin-left: auto;
  margin-right: auto;
	border: 2px solid #e25454;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px 5px 0px 0px;
	padding: 5px 20px 5px 20px;
	background-color: #e25454;
	color: #fff;
	display: inline-block;
	text-align: center;
	text-decoration: none;
  -webkit-box-shadow: 4px 0px 5px 0px rgba(0,0,0,0.3);
  -moz-box-shadow: 4px 0px 5px 0px rgba(0,0,0,0.3);
  box-shadow: 4px 0px 5px 0px rgba(0,0,0,0.3);
}

#fixed-form-container .body{
    background-color: #fff; 
    border-radius: 5px;
    
 overflow-y: hidden;
  
    padding: 10px; 
    -webkit-box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.3);
    -moz-box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.3);
    box-shadow: 4px 4px 5px 0px rgba(0,0,0,0.3);
}

@media only screen and (min-width:768px){
    #fixed-form-container .button{
       margin: 0;

    }
    #fixed-form-container {
        
        width: 390px;
        text-align: left;
    }

    #fixed-form-container .body{
        padding: 30px;
        border-radius: 0px 5px 5px 5px;
         overflow-y: hidden;
    }
}

        </style>

<section id="fixed-form-container" style='display:none;'>
	
		<div class="body">
                    
                        <table class="table table-bordered">
                           
                            <tr>
                                <th>Color/Size </th>
                                <td colspan="3"  style="">Red - 48(XL)</td>                   
                            </tr>
                            <tr>
                                <th>Date </th>
                                <td  colspan="2"><font id="fromDate">:10/10/2019</font> - <font id="toDate">15/10/2019</font></td>   
                            <tr>
                            </tr>
                          
                                <th>Rent :</th>
                                <td  colspan="3">₹ 2,900 * <font id="days">6</font> days = <font id="Total"></td>   
                                
                            </tr>
                            
                             <tr>
                                <th>Deposit :</th>
                                <td  colspan="3">₹ 5,000</td>  
                                
                            </tr>
                            
                            <tr>
                                <th>Grand Total</th>
                                <td colspan="3" style="color:red;"><font id="Grand"></td>   

                            </tr>

                        </table> 
                 <button type="button" class="btn  btn-block btn-success" style="border-radius: 0px !important;    height: auto !important;">Confirm Purchase</button>
                 <button type="button" class="btn  btn-block btn-danger" id='close' style="border-radius: 0px !important;    height: auto !important;" >Cancel</button>

    </div>
</section>



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
            $(document).ready(function () {

                var quantitiy = 0;
                $('.quantity-right-plus').click(function (e) {

                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    $('#quantity').val(quantity + 1);


                    // Increment

                });

                $('.quantity-left-minus').click(function (e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    var quantity = parseInt($('#quantity').val());

                    // If is not undefined

                    // Increment
                    if (quantity > 0) {
                        $('#quantity').val(quantity - 1);
                    }
                });

            });
        </script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/main2.js"></script>
    </body>
</html>

