<!DOCTYPE HTML>
<html>



    <head>



        <style>

            #colorlib-hero .flexslider .slider-text > .slider-text-inner .btn {
                font-size: 12px;
                text-transform: uppercase;
                letter-spacing: 3px;
                color: #fff;
                padding: 20px 20px 40px !important;
                border: none;
            }*{padding:0;margin:0;}

            body{
                font-family:Verdana, Geneva, sans-serif;
                font-size:18px;
                background-color:#CCC;
            }

            .float{
                position:fixed;
                width:60px;
                height:60px;
                bottom:40px;
                right:40px;
                background-color:#0C9;
                color:#FFF;
                border-radius:50px;
                text-align:center;
                box-shadow: 2px 2px 3px #999;
            }

            .my-float{
                margin-top:22px;
            }



            .topnav {
                overflow: hidden;
                background-color: #e9e9e9;
            }
            .carousel-inner{
                width:100%;
                max-height: 400px !important;
            }
            /* Style the links inside the navigation bar */
            .topnav a {
                float: left;
                display: block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .topnav a:hover {
                background-color: #ddd;
                color: black;
            }

            /* Style the "active" element to highlight the current page */
            .topnav a.active {
                background-color: white;
                color: white;
            }

            /* Style the search box inside the navigation bar */
            .topnav input[type=text] {
                float: right;
                padding: 6px;
                border: none;
                margin-top: 1px;
                margin-right: 16px;
                font-size: 17px;
                width:100%;
                margin-right: -10px;
            }

            /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
            @media screen and (max-width: 600px) {
                .topnav a, .topnav input[type=text] {
                    float: none;
                    display: block;
                    text-align: left;
                    width: 100%;
                    margin: 0;
                    padding: 14px;
                }
                .topnav input[type=text] {

                }
            }

            ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                color: grey !important ;
                opacity: 1; /* Firefox */
            }

            :-ms-input-placeholder { /* Internet Explorer 10-11 */
                color: black !important;
            }

            ::-ms-input-placeholder { /* Microsoft Edge */
                color: black !important;
            }


            input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {
                background-color: transparent;
                border: none;
                border-bottom:0px solid #9e9e9e !important;
                border-radius: 0;
                outline: none;
                height: 3rem;
                width: 100%;
                font-size: 16px;
                margin: 0 0 8px 0;
                padding: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
                -webkit-box-sizing: content-box;
                box-sizing: content-box;
                -webkit-transition: border .3s, -webkit-box-shadow .3s;
                transition: border .3s, -webkit-box-shadow .3s;
                transition: box-shadow .3s, border .3s;
                transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;
            }

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: ORANGERED;
                color: black !important;

                text-align: center;
            }
            $shopping-cart-red: #DF0000;

            .fa-stack[data-count]:after{
                position:absolute;
                right:0%;
                top:0%;
                content: attr(data-count);
                font-size:40%;
                padding:.6em;
                border-radius:999px;
                line-height:.75em;
                color: white;
                color:$shopping-cart-red;
                text-align:center;
                min-width:2em;
                font-weight:bold;
                background: white;
                border-style:solid;
            }
            .fa-circle {
                color:#DF0000;
            }

            .red-cart {
                color: #DF0000; background:white;
            }

            .badge {
                padding-left: 9px;
                padding-right: 9px;
                -webkit-border-radius: 9px;
                -moz-border-radius: 9px;
                border-radius: 9px;
            }

            .label-warning[href],
            .badge-warning[href] {
                background-color: #c67605;
            }
            #lblCartCount {
                font-size: 12px;
                background: #ff0000;
                color: #fff;
                padding: 0 5px;
                vertical-align: top;
                margin-left: -10px; 
            }

            img {
                width: 100%;
                height: auto;
                vertical-align: middle;
            }

          

        </style>  
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Store Template</title>

        <META name="viewport" content="initial-scale=1, user-scalable=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Compiled and minified JavaScript -->


        <!-- Flexslider  -->
        <link rel="stylesheet" href="css/flexslider.css">

        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
         <link rel="stylesheet" href="framework7.bundle.min.css">
        

        <!-- Date Picker -->
        <link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <!-- Flaticons  -->
        <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

        <!-- Theme style  -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="framework7.bundle.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="js/respond.min.js"></script>
        <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Cookie:regular"]
      }
    });
    
</script>
    </head>
    <body style="overflow:auto !important;" >

        <div class="colorlib-loader"></div>

        <div class="row" >

            <table class="table table-bordered">     
                <tr style="background-color:#2874f0;">
                    <th>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-target="slide-out" class="sidenav-trigger" style="margin-top:-8px;"> 
                            <i class="fa fa-bars" style="color:white;margin-top: 9px !important; font-size:24px;"></i></a>
                                                    <strong>&nbsp; &nbsp; <font  style="color:gold;  font-family:Cookie;font-size:26px;">Rent-On</font></strong> 


<!----  &nbsp;&nbsp;<img src="logo.png" style="margin-top: 15px;"> !---->



                   
                        <span class='badge badge-warning' id='lblCartCount' style="float:right;margin-top: 8px;  margin-right: 22px;
                              color: white ;display:none;"> 5 </span>
                                   <i class="fa" style="font-size:30px;float:right;margin-top: 8px;     margin-right: 20px;
                           color: white">&#xf07a;</i>

                        &nbsp; &nbsp; &nbsp;
                    </th>
                </tr>
                
                <th style="background-color:a!important;">
                    

                    <div class="col-sm-12" >
                 

<div class="page">
  <div class="navbar">
    <div class="navbar-bg"></div>
    <div class="navbar-inner">
      <div class="subnavbar">
        <!-- Searchbar with auto init -->
        <form class="searchbar">
          <div class="searchbar-inner">
            <div class="searchbar-input-wrap">
              <input type="search" placeholder="Search">
              <i class="searchbar-icon"></i>
              <span class="input-clear-button"></span>
            </div>
            <span class="searchbar-disable-button if-not-aurora">Cancel</span>
          </div>
        </form>
      </div>
    </div>
  </div>
  
</div>
                    </div>

                </th>


            </table>








            <ul id="slide-out" class="sidenav">
                <li style="display:none;">
                    <div class="user-view">
                        <div class="background">
                            <img class="circle" src="logo.png">
                        </div>
                        <a href="#user"></a> 
                        <a href="#name"><span class="white-text name">John Doe</span></a>
                        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>
                <br>
                <li><a href="#!"><font size="4"> <span class="glyphicon glyphicon-user"></span> &nbsp; Hello, Nikhil</a></font></li>
                <li><div class="divider"></div></li>
                <li><a class="subheader">Home</a></li>
                <li><a class="waves-effect" href="#!">Shop</a></li>
                <li><a class="waves-effect" href="#!"> Today's Deals</a></li>
                <li><a class="waves-effect" href="#!"> Your Orders</a></li>
                <li><a class="waves-effect" href="#!">  Your Account</a></li>
                <li><div class="divider"></div></li>
                <li><a class="waves-effect" href="http://192.168.0.105/colorlib-regform-8/">  Become a Seller</a></li>
                <li><a class="waves-effect" href="#!"> Customer Service</a></li>
            </ul>
        </div>
        <!--- <nav class="colorlib-nav" role="navigation" style="display:none;">
                     <div class="top-menu">
                             <div class="container">
                                     <div class="row">
                                             <div class="col-xs-2">
                                                 <div id="colorlib-logo"><a href="index.html"><img src="logo.png"></a></div>
                                             </div>
                                             <div class="col-xs-10 text-left menu-1">
                                                 <ul>
                                                       
                                                         <li> <i class="fa fa-user-circle" aria-hidden="true"></i>
                                                            <h4> <font color="white">Hello, Nikhil </font></h4></li>      
                                                       
                                                         <li class="active"><font color="black"><a href="index.html"> Home</a></li>
                                                             <li>
                                                                     <a href="##"> Shop</a>
                                                                    
                                                             </li>
                                                             <li><a href="blog.html"> Today's Deals</a></li>
                                                           
                                                             <li><a href="about.html"> Your Orders</a></li>
                                                             <li><a href="contact.html"> Your Account</a></li>
                                                             <li><a href="contact.html"> Become a Seller</a></li>
                                                             
                                                              <li><a href="add-to-wishlist.html">Customer Service</a></li>
                                                     </ul>
                                             </div>
                                     </div>
                             </div>
                     </div>
             </nav>
        !---->



        <!----<aside id="colorlib-hero">
                <div class="flexslider">
                        <ul class="slides">
                        <li style="background-image: url(images/img_bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                        <div class="row">
                                                <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" hidden>
                                                        <div class="slider-text-inner">
                                                                <div class="desc">
                                                                        <h1 class="head-1">Men's</h1>
                                                                        <h2 class="head-2">Jeans</h2>
                                                                        <h2 class="head-3">Collection</h2>
                                                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
                                                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                                                </div>
                                                        </div>
                                                </div> 
                                        </div>
                                </div>
                        </li>
                        <li style="background-image: url(images/img_bg_2.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                        <div class="row">
                                                <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text" hidden>
                                                        <div class="slider-text-inner">
                                                                <div class="desc">
                                                                        <h1 class="head-1">Huge</h1>
                                                                        <h2 class="head-2">Sale</h2>
                                                                        <h2 class="head-3">45% off</h2>
                                                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
                                                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                                                </div>
                                                        </div>
                                                </div> 
                                        </div>
                                </div>
                        </li>
                        <li style="background-image: url(images/img_bg_3.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                        <div class="row">
                                                <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                                                        <div class="slider-text-inner">
                                                                <div class="desc">
                                                                        <h1 class="head-1">New</h1>
                                                                        <h2 class="head-2">Arrival</h2>
                                                                        <h2 class="head-3">up to 30% off</h2>
                                                                        <p class="category"><span>New stylish shirts, pants &amp; Accessories</span></p>
                                                                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                                                </div>
                                                        </div>
                                                </div> 
                                        </div>
                                </div>
                        </li>
                        </ul>
                </div>
        </aside> !----->

        <div id="hideMyDiv">

            <div class='row' style="margin-top:-42px;"> 

                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:50%;width:100%;">
                    <!-- Indicators -->

                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>


                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
     <div class="item active">



                            <img src="images/stock2.jpg"  alt="Los Angeles">

                        </div>
                       
                        <div class="item">



                            <img src="images/stock2.jpg"  alt="Los Angeles">

                        </div>
                        <div class="item">
                            <img src="images/stock1.jpg"  alt="New York">
                        </div>



                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

            <style>

                /* Important stuff for this demo. */
.col-container {
  display: table;
  width: 100%;
}
.col {
  display: table-cell;
  padding: 16px;
}
             .img-responsive {
  max–width: 100%;
  height: 200px;
  padding: 0.6%;
  display: inline–block;
  float: left;
}
                #fixed {
                    overflow: scroll;
                    -webkit-overflow-scrolling: touch;
                }
                body
                {
                    overflow-x: hidden;
                    width:100%;
                }

                .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 3px !important;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
}
            </style>        

            
       

               <hr style="            border-top: 6px solid #8c8b8b; margin-top: -20px; ">





             <div class="row">
                 <div class="col-sm-12">
                     <div class="col-sm-12">
                     <center><strong><font size="4"> Create a free account .No Credit card Required </font></center>
                     <input type="button" class="btn btn-info btn-block" style="border-radius:0px !important; height: auto !important" value="SIGN UP">
                    
                     <strong color="blue" style='color: darkslateblue;'><font size="3"> <a href="##" onclick="show();">&nbsp;&nbsp;Existing customer ? Sign in </a>  </strong>
                     <br>
                     </div>
                 </div>
                 
                 
             </div>
             <hr style="            border-top: 6px solid #8c8b8b; ">
             <br>








           
            <div class="colorlib-shop" style="display:block;">
                <div class="row" style="margin-top:-35px;">
                    <div class="col-sm-12">
                        <div class="col-sm-12">
                       <strong><font size="4">&nbsp; Best Offerings for her starting ₹900</font></strong>
                        <table class="table table-responsive table-striped" border="1" >
                         

                            <tr>
                                <th>
                                    <a href="product-detail.php"><img class="img-responsive" src="images/item-11.jpg"> </a>
                                </th>
                                <th>  
                                    <a href="product-detail.php"> <img  class="img-responsive" src="images/item-12.jpg"></a>
                                </th>  
                            </tr>
                            <tr>
                                <th>
                                    <a href="product-detail.php">  <a href="shop.html"><img class="img-responsive" src="images/item-16.jpg"> </a>
                                </th>
                                <th>  
                                    <a href="product-detail.php"><img  class="img-responsive" src="images/item-13.jpg"></a>
                                </th>  
                            </tr>





                        </table> 

                        </div>
                    </div>
                </div>
            </div>












            <div class="colorlib-shop" style="margin-top:-20px; display: none;">
                <div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>&nbsp;&nbsp; Newest arrival
                            </h3>

                        </div>
                        <div class="col-sm-12">
                            <table class="TABLE">
                                <tr>
                                    <th><a href="shop.html"> <img src="images/item-6.jpg" style="width:100%;">
                                        </a>
                                    <th>
                                    <th>  
                                        <img src="images/item-5.jpg"style="width:100%;"
                                    </th>                                 
                                </tr>
                            </table>
                        </div>

                    </div>
                    <div class="row">
                        <!---<div class="col-md-3 text-center">
                                <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-5.jpg);">
                                                <p class="tag"><span class="new">New</span></p>
                                                <div class="cart">
                                                        <p>
                                                                <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                                <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                                <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                                <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                        </p>
                                                </div>
                                        </div>
                                        <div class="desc">
                                                
                                                <p class="price"><span>₹300.00</span></p>
                                        </div>
                                </div>
                        </div> !---->
                        <!----<div class="col-md-3 text-center">
                                <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-6.jpg);">
                                                <p class="tag"><span class="new">New</span></p>
                                                <div class="cart">
                                                        <p>
                                                                <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                                <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                                <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                                <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                        </p>
                                                </div>
                                        </div>
                                        <div class="desc">
                                                <h3><a href="shop.html">Floral Dress</a></h3>
                                                <p class="price"><span>₹300.00</span></p>
                                        </div>
                                </div>
                        </div> !---->
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-7.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>₹300.00</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(images/item-8.jpg);">
                                    <p class="tag"><span class="new">New</span></p>
                                    <div class="cart">
                                        <p>
                                            <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                            <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                            <span><a href="#"><i class="icon-heart3"></i></a></span>
                                            <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="desc">
                                    <h3><a href="shop.html">Floral Dress</a></h3>
                                    <p class="price"><span>₹300.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<hr style="            border-top: 6px solid #8c8b8b; ">
            <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-1.jpg); margin-top: -150px" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="intro-desc">
                                <div class="text-salebox">
                                    <div class="text-lefts">
                                        <div class="sale-box">
                                            <div class="sale-box-top">
                                                <h2 class="number">45</h2>
                                                <span class="sup-1">%</span>
                                                <span class="sup-2">Off</span>
                                            </div>
                                            <h2 class="text-sale">Sale</h2>
                                        </div>
                                    </div>
                                    <div class="text-rights">
                                        <h3 class="title">Just hurry up limited offer!</h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                        <p><a href="shop.html" class="btn btn-primary">Shop Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="colorlib-shop" style="margin-top:-100px;">
                <div class="">
                    <div class="row">
                        <div class="col-sm-12">

                            <th><h3>&nbsp;&nbsp;Our Products</h3></th>


                            <div class="row">

                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-9.jpg);">
                                            <p class="tag"><span class="sale">Sale</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹199.00</span> <span class="sale">₹300.00</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-10.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-11.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-12.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-13.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-14.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-15.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 text-center">
                                    <div class="product-entry">
                                        <div class="product-img" style="background-image: url(images/item-16.jpg);">
                                            <p class="tag"><span class="new">New</span></p>
                                            <div class="cart">
                                                <p>
                                                    <span class="addtocart"><a href="cart.html"><i class="icon-shopping-cart"></i></a></span> 
                                                    <span><a href="product-detail.php"><i class="icon-eye"></i></a></span> 
                                                    <span><a href="#"><i class="icon-heart3"></i></a></span>
                                                    <span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="shop.html">Floral Dress</a></h3>
                                            <p class="price"><span>₹300.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="colorlib-testimony" class="colorlib-light-grey" hidden>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                                    <h2><span>Our Satisfied Customer says</span></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">						
                                    <div class="owl-carousel2">
                                        <div class="item">
                                            <div class="testimony text-center">
                                                <span class="img-user" style="background-image: url(images/person1.jpg);"></span>
                                                <span class="user">Alysha Myers</span>
                                                <small>Miami Florida, USA</small>
                                                <blockquote>
                                                    <p>" A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony text-center">
                                                <span class="img-user" style="background-image: url(images/person2.jpg);"></span>
                                                <span class="user">James Fisher</span>
                                                <small>New York, USA</small>
                                                <blockquote>
                                                    <p>One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="testimony text-center">
                                                <span class="img-user" style="background-image: url(images/person3.jpg);"></span>
                                                <span class="user">Jacob Webb</span>
                                                <small>Athens, Greece</small>
                                                <blockquote>
                                                    <p>Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                    </div>

                    <div class="colorlib-blog">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2 text-center colorlib-heading">
                                    <h2>Recent Blog</h2>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <article class="article-entry">
                                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-1.jpg);"></a>
                                        <div class="desc">
                                            <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                            <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                            <h2><a href="blog.html">Openning Branches</a></h2>
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="article-entry">
                                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-2.jpg);"></a>
                                        <div class="desc">
                                            <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                            <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                            <h2><a href="blog.html">Openning Branches</a></h2>
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <article class="article-entry">
                                        <a href="blog.html" class="blog-img" style="background-image: url(images/blog-3.jpg);"></a>
                                        <div class="desc">
                                            <p class="meta"><span class="day">02</span><span class="month">Mar</span></p>
                                            <p class="admin"><span>Posted by:</span> <span>Noah Henderson</span></p>
                                            <h2><a href="blog.html">Openning Branches</a></h2>
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="colorlib-subscribe" style="display:none;">
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

                    <footer id="colorlib-footer" role="contentinfo" hidden>
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

                <div class="gototop js-top" style="display:none;">
                    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
                </div>
            </div>
            <div class="footer">
                <h4 style="margin-top: 11px; color: WHITE"> <i class="fa fa-inr"></i> <a href="http://192.168.108/Login_v8/index.php" style="color:white;">Earn Money Rent your Stuff </a><i class="fa fa-inr"></i></h4>
            </div>
        </div>
       
        
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
.form-control1{
font-family: Ubuntu-Bold;
    font-size: 15px;
    color: #1b3815;
    line-height: 1.2;
    position: relative;
    display: block;
    width: 100%;
    height: 55px;
    background: #ebebeb;
    border-radius: 27px;
    padding: 0 35px 0 35px;
}

.input100 {
    font-family: Ubuntu-Bold;
    font-size: 15px;
    color: #1b3815;
    line-height: 1.2;
    position: relative;
    display: block;
    width: 100%;
    height: 55px;
    background: #ebebeb;
    border-radius: 27px;
    padding: 0 35px 0 35px;
}
.wrap-input100 {
    width: 100%;
    background-color: #fff;
    border: 1px solid lightgrey !important;
        border-radius: 5px;
  
    position: relative;
    z-index: 1;
}
.validate-input {
    position: relative;
}
.m-b-16 {
    margin-bottom: 16px;
}
        </style>
        <hr>
        <section id="fixed-form-container" style='display:none;'>
	
		<div class="body">
                    <fieldset>   
                        <div class="col-sm-12">
                        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                                    <h3 style="float:left">Login </h3>
                                    
                                    <br><br>
                                    <div style="text-align:left;">  Email or mobile phone number </div>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                                            
						<input class="input100" type="text" name="username" placeholder="">
						<span class="focus-input100"></span>
					</div>
<div style="text-align:left;">  Password </div>
					<div class="wrap-input100 validate-input" data-validate="Please enter password">
						<input class="input100" type="password" name="pass" placeholder="  ">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2">
							Username / Password?
						</a>
					</div>

					                 <button type="button" class="btn  btn-block btn-success" style="border-radius: 0px !important;    height: auto !important;">SIGN IN</button>

<center> <h>OR </h></center>
   <div class="col">
        <a href="#" class="fb btn btn-sm" style="border-radius: 0px !important;    height: auto !important;">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
       
        <a href="http://192.168.0.108/store/circle.php" class="btn  btn-sm btn-info" style="border-radius: 0px !important;    height: auto !important;">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>


					<div class="flex-col-c p-t-40 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
                            
                    </fieldset>

    </div>
</section>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <!-- Date Picker -->
        <script src="js/bootstrap-datepicker.js"></script>
        <!-- Stellar Parallax -->
        <script src="js/jquery.stellar.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>





        <script src="js/main.js"></script>

        <script>
  function show(){
      $('#fixed-form-container').fadeIn();
      
    }
    function hideDiv() {

        var charcter = $('#search').val();

        var length = charcter.length;

        if (length > 0) {
            $('#hideMyDiv').hide();
        } else {
            $('#hideMyDiv').show();
        }
    }



    $(document).ready(function () {
        $('.sidenav').sidenav();
    });
    
    

        </script>   
</html>

